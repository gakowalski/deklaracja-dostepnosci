<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Deklaracja dostępności</title>
    <?php if (isset($_REQUEST['dysleksja'])): ?>
      <link rel="stylesheet" href="https://cdn.clarkhacks.com/OpenDyslexic/v3/OpenDyslexic.css">
    <?php endif; ?>
  </head>
  <body>
    <main>
    <?php require 'deklaracja-dostepnosci.php'; ?>
    </main>
  </body>
</html>
