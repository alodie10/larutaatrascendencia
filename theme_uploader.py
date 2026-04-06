import requests
import re
import os
import urllib3

urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

url_login = "https://larutaatrascendencia.com.ar/wp-login.php"
url_theme_install = "https://larutaatrascendencia.com.ar/wp-admin/theme-install.php"
url_upload = "https://larutaatrascendencia.com.ar/wp-admin/theme-install.php?action=upload-theme"

username = "aradan1@gmail.com"
password = "Alea__2723"
theme_zip_path = r"C:\larutaatrascendencia\lrt-theme.zip"

session = requests.Session()

# 1. Login
print("Logging into WordPress...")
login_data = {
    'log': username,
    'pwd': password,
    'wp-submit': 'Log In',
    'redirect_to': 'https://larutaatrascendencia.com.ar/wp-admin/',
    'testcookie': '1'
}
response = session.post(url_login, data=login_data, verify=False)

if "wp-admin" not in response.url:
    print("Login failed. Check username/password.")
    exit(1)
print("Login successful.")

# 2. Get the nonce for theme upload
print("Fetching theme-install page to find nonce...")
response = session.get(url_theme_install + "?tab=upload", verify=False)
nonce_match = re.search(r'name="_wpnonce" value="([^"]+)"', response.text)
if not nonce_match:
    print("Could not find _wpnonce. Check if the user has theme upload permissions.")
    exit(1)
nonce = nonce_match.group(1)
print(f"Found nonce: {nonce}")

# 3. Upload theme
print(f"Uploading theme zip: {theme_zip_path}...")
with open(theme_zip_path, 'rb') as f:
    files = {
        'themezip': ('lrt-theme.zip', f, 'application/zip')
    }
    data = {
        '_wpnonce': nonce,
        '_wp_http_referer': '/wp-admin/theme-install.php?tab=upload',
        'install-theme-submit': 'Instalar ahora'
    }

    response = session.post(url_upload, data=data, files=files, verify=False)

if "successfully" in response.text or "correctamente" in response.text or "activate" in response.text:
    print("Theme uploaded successfully!")
    
    # 4. Activate theme
    activate_url_match = re.search(r'href="([^"]+action=activate&amp;template=[^"]+)"', response.text)
    if activate_url_match:
        activate_url = activate_url_match.group(1).replace('&amp;', '&')
        print(f"Activating theme via URL: {activate_url}")
        session.get(activate_url, verify=False)
        print("Theme activated!")
    else:
        print("Theme installed but could not find activation link (it might be already active or require manual activation).")
else:
    print("Theme upload failed.")
    print(response.text[:1000])
