<?php

$type = 'website';
// $type = 'mobile_app';

$owner = "Polska Organizacja Turystyczna";
$name = "Polska.Travel (Narodowy Portal Turystyczny)";
$url = "https://polska.travel";
$published = "2019-12-23";
$modified = "2019-12-24";

$declaration_modified = "2019-12-25";

$declaration_source = 'self-assesment';
// $declaration_source = 'external-audit';
// $declaration_source_author = 'Some Audit Company';

// $compliance = 'full';
$compliance = 'partial';
// $compliance = 'none';

$requirements_not_met = [
  'filmy nie posiadają napisów dla osób głuchych',
  'formularz kontaktowy nie posiada dowiązanych etykiet tekstowych',
];

$requirements_excluded = [
  'filmy zostały opublikowane przed wejściem w życie ustawy o dostępności cyfrowej',
  'poprawienie dostępności strony niosłoby za sobą nadmierne obciążenia dla podmiotu publicznego',
  'mapy są wyłączone z obowiązku zapewniania dostępności',
];

$excessive_load = false;
$excessive_load_analysis = '';  //< art. 8, ust. 3
$excessive_load_url = '';

$are_keyboard_standard_shortcuts_used = true;

$keyboard_shortcuts = [
  'n' => 'wyświetl następny marker na mapie',
  'p' => 'wyświetl poprzedni marker na mapie',
];

$contact_name = 'Grzegorz Kowalski';
$contact_mail = 'grzegorz.kowalski@pot.gov.pl';
$contact_phone = '123 456 789';

$buildings = [
  'Warszawa, ul. Chałubińskiego 8' => [
    'entrance' => 'Wejście główne do budynku skłda się z głównych drzwi obrotowych oraz licznych bocznych drzwi zwykłych. Wejście jest na poziomie gruntu, nie ma więc schodów i nie ma potrzeby podjazdów czy wind.',
    'control_areas' => 'Aby wejść do właściwych części biurowych należy przejść przez obszar recepcji / ochrony. Pracownicy ochrony budynku odnotowują kto przychodzi i otwierają specjalne bramki, aby umożliwić przejście lub przejazd dalej.',
    'corridors' => 'Korytarze są względnie szerokie, nie należy spodziewać się większych kłopotów w związku z poruszaniem się po nich wózkiem.',
    'stairs' => 'W budynku powszechnie używane są windy, wszędzie można się dostać z ich pomocą. Schody istnieją jako przejście awaryjne, ewakuacyjne.',
    'elevators' => 'Windy są pojemne, jest ich bardzo dużo, są pojemne, nie ma problemu z tłokiem. Cześć jest obsługiwana nisko umiejscowionym panelem zewnętrznym, cześć ma panele wewnętrzne.',
    'ramps' => 'W budynku nie ma żadnych pochylni, nie ma potrzeby ich stosować, bo wszystko załatwiają windy.',
    'platforms' => '',
    'voice-info' => 'W budynku informacje głosowe przekazywane przez głośniki są stosowane tylko w sytuacjach awaryjnych.',
    'induction-loop' => 'Nie są stosowane pętle indukcyjne.',
    'assistance-dog' => 'Można wejść z psem asystującym.',
    'sign-language-interpreter' => 'Brak tłumacza języka migowego na miejscu. Brak stałego tłumazca języka migowego dostępnego zdalnie (online).',
    'alternative-route' => '',
    'other-ways-of-communiction' => '',
    'building-photo-URL' => '',
  ],
];

$mobile_apps = [
  'Nazwa aplikacji mobilnej' => 'link',
  'Nazwa aplikacji mobilnej 2' => 'link',
];
