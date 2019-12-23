var ids = [
  'a11y-deklaracja',
  'a11y-wstep',
  'a11y-podmiot',
  'a11y-url',
  'a11y-data-publikacja',
  'a11y-data-aktualizacja',
  'a11y-status',
//  'a11y-ocena', //< optional
  'a11y-data-sporzadzenie',
//  'a11y-audytor', //< optional
  'a11y-kontakt',
  'a11y-osoba',
  'a11y-email',
  'a11y-telefon',
  'a11y-procedura',
  'a11y-architektura',
  'a11y-aplikacje',
];

ids.forEach(function(id) {
  if (!document.getElementById(id)) {
    console.log('Brak ' + id);
  };
});
