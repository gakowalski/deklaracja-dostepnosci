# Skrypt PHP generujący deklarację dostęności

## Użycie

Należy na bazie pliku `config.sample.php` stworzyć plik `config.php` uzupełniając odpowiednio zawarte w nim treści. Uruchomienie pliku `index.php` w przeglądarce pokaże samodzielną stronę HTML a uruchomienie `deklaracja-dostepnosci` wygeneruje fragment HTML, który można wstawić do istniejącej strony.

## Uwaga

W szablonie własnego serwisu należy dodać znacznik `meta` kierujący do deklaracji dostępności, np.:

```
<meta name="deklaracja-dostępności" content="https://.../deklaracja-dostepnosci/">
```

## Sprawdzenie poprawności deklaracji w konsoli przeglądarki

W konsoli przeglądarki uruchom prosty skrypt zawarty w [check.js](check.js). Przy braku któregoś identyfikatora zostanie wypisany komunikat. Przy braku wykrytych błędów, nie będzie żadnego komunikatu.

Skrypt jest bardzo prosty i obecnie nie sprawdza identyfikatorów `a11y-ocena` oraz `a11y-audytor`, które są wymagane tylko w szczególnych warunkach.

## Dokumenty

* [Ustawa z dnia 4 kwietnia 2019 r. o dostępności cyfrowej stron internetowych i aplikacji mobilnych podmiotów publicznych](http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20190000848)
* [Warunki techniczne publikacji oraz struktura dokumentu elektronicznego "Deklaracji Dostępności"](https://mc.bip.gov.pl/objasnienia-prawne/warunki-techniczne-publikacji-oraz-struktura-dokumentu-elektronicznego-deklaracji-dostepnosci.html), v 1.5, ostatnia modyfikacja 2020-02-11 10:22:04
* [DECYZJA WYKONAWCZA KOMISJI (UE) 2018/1523 z dnia 11 października 2018 r. ustanawiająca wzór oświadczenia w sprawie dostępności zgodnie z dyrektywą Parlamentu Europejskiego i Rady (UE) 2016/2102 w sprawie dostępności stron internetowych i mobilnych aplikacji organów sektora publicznego](https://eur-lex.europa.eu/legal-content/PL/TXT/PDF/?uri=CELEX:32018D1523&from=EN)
