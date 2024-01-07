# Vanocni-Projekt
 Implementujte real-time chat aplikaci. Musíte splnit následující požadavky

## Registrace
- pouze autentizované uživatele mají přístup k aplikaci
- kontrolujte zda nenastane kolize uživatelských jmen
- hashujte hesla
- Bonus: implementujte obnovení hesla prostřednictvím emailů uživatelů 
## Chat
- uživatele mohou vytvořit chat room a vybrat zda bude přístupná všem nebo jen vybraným uživatelům
- chatování by mělo probíhat real-time bez updatování celé stránky
## REST
- api by měla být přístupná pouze autentizovaným uživatelům
- vytvořte následující GET endpointy (a jejich kombinace)
- vracení všech zpráv ze všech chat roomů
- vracení všech zpráv vybraného uživatele
- vracení všech zpráv vybrané chat room
- vracení všech zpráv obsahujících vybrané slovo (case insensetive)
