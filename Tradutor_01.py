from deep_translator import GoogleTranslator

# Traduz do inglês para o português
translator = GoogleTranslator(source='en', target='pt')
text = "Hello, how are you today?"

# Traduz o texto
translated_text = translator.translate(text)

# Exibe o texto traduzido
print("Texto original:", text)
print("Texto traduzido:", translated_text)
