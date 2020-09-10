<?php
  require 'config.php';
  $ustawa = 'z dnia 4 kwietnia 2019 r. o dostępności cyfrowej stron internetowych i aplikacji mobilnych podmiotów publicznych';
?>
<h1 id="a11y-deklaracja">Deklaracja dostępności</h1>
<p id="a11y-wstep">
  <span id="a11y-podmiot"><?=$owner ?></span>
  <?php if ($type == 'website'): ?>
  zobowiązuje się zapewnić dostępność swojej strony internetowej zgodnie z przepisami ustawy <?= $ustawa ?>. Oświadczenie w sprawie dostępności ma zastosowanie do strony internetowej
  <?php else: ?>
  zobowiązuje się zapewnić dostępność swojej aplikacji mobilnej zgodnie z przepisami ustawy <?= $ustawa ?>. Oświadczenie w sprawie dostępności ma zastosowanie do aplikacji mobilnej
  <?php endif; ?>
  <a id="a11y-url" href="<?=$url ?>"><?=$name ?></a>.
</p>
<p>
  Data publikacji <?= ($type == 'website')? 'strony internetowej' : 'aplikacji mobilnej' ?>:
  <span id="a11y-data-publikacja"><?=$published ?></span>.
</p>
<p>
  Data ostatniej istotnej aktualizacji:
  <span id="a11y-data-aktualizacja"><?=$modified ?></span>.
</p>
<p id="a11y-status">
<?= ($type == 'website')? 'Strona internetowa ' : 'Aplikacja mobilna ' ?>
jest
<?php switch ($compliance): ?><?php case 'full': ?>
<strong>zgodna</strong> z ustawą <?= $ustawa ?>.
<?php break; case 'partial': ?>
<strong>częściowo zgodna</strong> z ustawą <?= $ustawa ?> z powodu niezgodności lub wyłączeń wymienionych poniżej.
<?php break; default: ?>
<strong>niezgodna</strong> z ustawą <?= $ustawa ?>. Niezgodność (niezgodności) lub wyłączenia wymieniono poniżej.
<?php endswitch; ?>
</p>
<?php if ($compliance != 'full'): ?>
<p>
    <?php if (count($requirements_not_met)): ?>
    Niezgodności:
    <ul>
      <?php foreach($requirements_not_met as $item): ?>
      <li><?= $item ?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?php if (count($requirements_excluded)): ?>
    Wyłączenia:
    <ul>
      <?php foreach($requirements_excluded as $item): ?>
      <li><?= $item ?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?php if ($excessive_load): ?>
    Nadmierne obciążenie:
    <ul>
      <li><?= $excessive_load_analysis; ?></li>
      <li><a id="a11y-ocena" href="<?= $excessive_load_url ?>">Wynik analizy</a></li>
    </ul>
    <?php endif; ?>
</p>
<p>
  Oświadczenie sporządzono dnia: <span id="a11y-data-sporzadzenie"><?= $declaration_modified ?></span>.
  <?php switch ($declaration_source): ?><?php case 'external-audit': ?>
  Deklarację sporządzono na podstawie badania przeprowadzonego przez podmiot zewnętrzny: <span id="a11y-audytor"><?=$declaration_source_author ?></span>.
  <?php break; default: ?>
  Deklarację sporządzono na podstawie samooceny przeprowadzonej przez podmiot publiczny.
  <?php endswitch; ?>
</p>

<p>
  <?php if ($are_keyboard_standard_shortcuts_used && $type == 'website'): ?>
    Na stronie internetowej można używać standardowych skrótów klawiaturowych przeglądarki.
  <?php endif; ?>
  <?php if (count($keyboard_shortcuts)): ?>
    Skróty klawiaturowe:
    <ul>
      <?php foreach($keyboard_shortcuts as $key => $item): ?>
      <li><span style="font-family: monospace, monospace;"><?= $key ?></span>: <?= $item ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</p>
<?php endif; ?>

<h2 id="a11y-kontakt">Informacje zwrotne i dane kontaktowe</h2>
<p>
  W przypadku problemów z dostępnością strony internetowej prosimy o kontakt. Osobą kontaktową jest
  <span id="a11y-osoba"><?=$contact_name ?></span>,
  <a id="a11y-email" href="mailto:<?=$contact_mail ?>"><?=$contact_mail ?></a>.
  Kontaktować można się także dzwoniąc na numer telefonu
  <a id="a11y-telefon" href="tel:<?=$contact_phone ?>"><?=$contact_phone ?></a>.
  Tą samą drogą można składać wnioski o udostępnienie informacji niedostępnej oraz składać skargi na brak zapewnienia dostępności.
</p>

<p id="a11y-procedura">Każdy ma prawo do wystąpienia z żądaniem zapewnienia dostępności cyfrowej strony internetowej, aplikacji mobilnej lub jakiegoś ich elementu. Można także zażądać udostępnienia informacji za pomocą alternatywnego sposobu dostępu, na przykład przez odczytanie niedostępnego cyfrowo dokumentu, opisanie zawartości filmu bez audiodeskrypcji itp. Żądanie powinno zawierać dane osoby zgłaszającej żądanie, wskazanie, o którą stronę internetową lub aplikację mobilną chodzi oraz sposób kontaktu. Jeżeli osoba żądająca zgłasza potrzebę otrzymania informacji za pomocą alternatywnego sposobu dostępu, powinna także określić dogodny dla niej sposób przedstawienia tej informacji.
<br><br>
Podmiot publiczny powinien zrealizować żądanie niezwłocznie, nie później niż w ciągu 7 dni od dnia wystąpienia z żądaniem. Jeżeli dotrzymanie tego terminu nie jest możliwe, podmiot publiczny niezwłocznie informuje o tym wnoszącego żądanie, kiedy realizacja żądania będzie możliwa, przy czym termin ten nie może być dłuższy niż 2 miesiące od dnia wystąpienia z żądaniem. Jeżeli zapewnienie dostępności cyfrowej nie jest możliwe, podmiot publiczny może zaproponować alternatywny sposób dostępu do informacji. W przypadku, gdy podmiot publiczny odmówi realizacji żądania zapewnienia dostępności lub alternatywnego sposobu dostępu do informacji, wnoszący żądanie możne złożyć skargę w sprawie zapewniana dostępności cyfrowej strony internetowej, aplikacji mobilnej lub elementu strony internetowej, lub aplikacji mobilnej. Po wyczerpaniu wskazanej wyżej procedury można także złożyć wniosek do Rzecznika Praw Obywatelskich (<a href="https://www.rpo.gov.pl/">www.rpo.gov.pl</a>).
</p>

<h2 id="a11y-architektura">Dostępność architektoniczna</h2>
<?php if (count($buildings)): ?>
<p>
  <?php foreach($buildings as $addresss => $info): ?>
  Budynek zlokalizowany w <?=$addresss ?>:
  <ul>
    <?php foreach($info as $name => $value): ?>
    <?php if (empty($value)) continue; ?>
    <li><?= $value ?></li>
    <?php endforeach; ?>
  </ul>
  <?php endforeach; ?>
</p>
<?php else: ?>
  Brak lokalizacji fizycznej podmiotu.
<?php endif; ?>

<?php if (count($mobile_apps)): ?>
<h2 id="a11y-aplikacje">Aplikacje mobilne</h2>
<p>
  <ul>
    <?php foreach($mobile_apps as $app => $link): ?>
    <li><a href="<?= $link ?>"><?=$app ?></a></li>
    <?php endforeach; ?>
  </ul>
</p>
<?php endif; ?>
