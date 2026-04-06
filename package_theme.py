import shutil
import os
import zipfile

def package_theme():
    theme_source_dir = 'theme'
    theme_slug = 'lrt-theme'
    output_zip = 'lrt-theme.zip'
    
    # Remove existing zip if it exists
    if os.path.exists(output_zip):
        os.remove(output_zip)
        print(f"Removed existing {output_zip}")

    print(f"Creating {output_zip}...")
    with zipfile.ZipFile(output_zip, 'w', zipfile.ZIP_DEFLATED) as zipf:
        for root, dirs, files in os.walk(theme_source_dir):
            for file in files:
                # Construct the full local path
                file_path = os.path.join(root, file)
                # Construct the path inside the zip (relative to theme_source_dir)
                archive_name = os.path.relpath(file_path, theme_source_dir)
                
                zipf.write(file_path, archive_name)
                print(f"Added {archive_name}")

    print(f"Theme packaged successfully into {output_zip}")

if __name__ == "__main__":
    package_theme()
