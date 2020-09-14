<?php

$type = 'website';        //< gdy deklaracja dla strony internetowej
// $type = 'mobile_app';  //< gdy deklaracja dla aplikacji mobilnej

$owner = "Polska Organizacja Turystyczna";                //< wlasciciel strony/aplikacji
$name = "Polska.Travel (Narodowy Portal Turystyczny)";    //< nazwa strony/aplikacji
$url = "https://polska.travel";                           //< adres internetowy strony lub skad mozna aplikacje pobrac

$published = "2019-12-23";  //< data publikacji strony lub aplikacji
$modified = "2019-12-24";   //< data ostatniej istotnej modyfikacji strony lub aplikacji

$declaration_modified = "2019-12-25";   //< data sporzadzenia deklaracji

$declaration_source = 'self-assesment';                 //< gdy deklaracje sporządzono samodzielnie
// $declaration_source = 'external-audit';              //< gdy deklracje sporzadzil ktos z zewnatrz...
// $declaration_source_author = 'Some Audit Company';   //< ...i kto to byl

// $compliance = 'full';      //< pelna zgodnosc z ustawa
$compliance = 'partial';      //< czesciowa zgodnosc z ustawa
// $compliance = 'none';      //< brak zgodnosci z ustawa

$requirements_not_met = [     //< niespelnione wymagania ustawy
  'filmy nie posiadają napisów dla osób głuchych',
  'formularz kontaktowy nie posiada dowiązanych etykiet tekstowych',
];

$requirements_excluded = [    //< wylaczenia z wymagan ustawy
  'filmy zostały opublikowane przed wejściem w życie ustawy o dostępności cyfrowej',
  'poprawienie dostępności strony niosłoby za sobą nadmierne obciążenia dla podmiotu publicznego',
  'mapy są wyłączone z obowiązku zapewniania dostępności',
];

$excessive_load = false;        //< gdy nadmierne obciazenie
$excessive_load_analysis = '';  //< art. 8, ust. 3
$excessive_load_url = '';

$are_keyboard_standard_shortcuts_used = true;

$keyboard_shortcuts = [
  'n' => 'wyświetl następny marker na mapie',
  'p' => 'wyświetl poprzedni marker na mapie',
];

$contact_name = 'Paulina Skoczeń-Osińska';
$contact_mail = 'paulina.skoczen@pot.gov.pl';
$contact_phone = '225367066';

$buildings = [
  'Warszawa, ul. Chałubińskiego 8' => [
    'entrance' => 'Wejście główne do budynku skłda się z głównych drzwi obrotowych oraz licznych bocznych drzwi zwykłych. Wejście jest na poziomie gruntu, nie ma więc schodów i nie ma potrzeby podjazdów czy wind.',
    'control-areas' => 'Aby wejść do właściwych części biurowych należy przejść przez obszar recepcji / ochrony. Pracownicy ochrony budynku odnotowują kto przychodzi i otwierają specjalne bramki, aby umożliwić przejście lub przejazd dalej.',
    'corridors' => 'Korytarze są względnie szerokie, nie należy spodziewać się większych kłopotów w związku z poruszaniem się po nich wózkiem.',
    'stairs' => 'W budynku powszechnie używane są windy, wszędzie można się dostać z ich pomocą. Schody istnieją jako przejście awaryjne, ewakuacyjne.',
    'elevators' => 'Windy są pojemne, jest ich bardzo dużo, są pojemne, nie ma problemu z tłokiem. Cześć jest obsługiwana nisko umiejscowionym panelem zewnętrznym, cześć ma panele wewnętrzne.',
    'ramps' => 'W budynku nie ma żadnych pochylni, nie ma potrzeby ich stosować, bo wszystko załatwiają windy.',
    'platforms' => '',
    'voice-info' => 'W budynku informacje głosowe przekazywane przez głośniki są stosowane tylko w sytuacjach awaryjnych.',
    'induction-loop' => 'Nie są stosowane pętle indukcyjne.',
    'parking-for-disabled' => 'Na parkingu przed budynkiem znajdują się miejsca parkingowe dla niepełnosprawnych.',
    'assistance-dog' => 'Można wejść z psem asystującym.',
    'sign-language-interpreter' => 'Brak tłumacza języka migowego na miejscu. Brak stałego tłumazca języka migowego dostępnego zdalnie (online).',
    'alternative-route' => '',
    'other-ways-of-communiction' => '',
    'building-photo-URL' => '',
  ],
];

$mobile_apps = [
  'Nazwa aplikacji mobilnej' => 'link',
  'Nazwa aplikacji mobilnej 2' => 'link_2',
];
