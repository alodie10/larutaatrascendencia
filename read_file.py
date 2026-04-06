import codecs

try:
    with codecs.open('c:/larutaatrascendencia/full_doc_text.txt', 'r', encoding='latin-1') as f:
        content = f.read()
    
    with open('c:/larutaatrascendencia/extracted_content.md', 'w', encoding='utf-8') as f:
        f.write("# Extracted Content - La Ruta a Trascendencia\n\n")
        f.write(content)
    print("Success: Content extracted to extracted_content.md")
except Exception as e:
    print(f"Error: {e}")
