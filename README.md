# Vanocni-Projekt

## Zadání
 Implementujte real-time chat aplikaci. Musíte splnit následující požadavky

### Registrace
- pouze autentizované uživatele mají přístup k aplikaci
- kontrolujte zda nenastane kolize uživatelských jmen
- hashujte hesla
- Bonus: implementujte obnovení hesla prostřednictvím emailů uživatelů 
### Chat
- uživatele mohou vytvořit chat room a vybrat zda bude přístupná všem nebo jen vybraným uživatelům
- chatování by mělo probíhat real-time bez updatování celé stránky
### REST
- api by měla být přístupná pouze autentizovaným uživatelům
- vytvořte následující GET endpointy (a jejich kombinace)
- vracení všech zpráv ze všech chat roomů
- vracení všech zpráv vybraného uživatele
- vracení všech zpráv vybrané chat room
- vracení všech zpráv obsahujících vybrané slovo (case insensetive)

## Instalace
Pro správný běh webové aplikace na localhostu je potřeba provést následující kroky:

### Krok 1: Stáhnutí repozitáře
```
git clone https://https://github.com/captain-milous/Vanocni-Projekt.git
cd Vanocni-Projekt
```

### Krok 2: Konfigurace databáze
Importujte databázi pomocí přiloženého SQL souboru *chat.sql* do vaší databáze.
```
mysql -u [uzivatel] -p [databaze] < chat.sql
```

#### Nastavte připojení k databázi v souboru config.php nebo jiném souboru, kde jsou uloženy konfigurační údaje.
Configurační soubor naleznete v adresáři: *Vanocni-Projekt/php/config.php
```
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "chat";
```

### Krok 3: Spuštění webové aplikace
Přesuňte celý projekt do adresáře, kde máte nainstalovaný lokální server (např. XAMPP, Apache, Nginx).

Otevřete prohlížeč a zadejte následující URL: 
*http://localhost/tvoje-repozitar*

### Požadavky na Provoz
PHP verze 7.0 nebo novější
MySQL nebo jiný relační databázový systém
Webový server (XAMPP, Apache, Nginx, atd.)
