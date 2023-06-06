<?php
$words = $_GET['word'];
$textMessage = $_GET['message'];
$censorWord = str_replace($words, '***', $textMessage);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Badwords Censorship</title>
  </head>
  <body>
    <?= $textMessage; ?>
    <p>Il paragrafo è lungo: <?= strlen($textMessage); ?> </p>
    <?= $censorWord; ?>
    <p>Il paragrafo è lungo: <?= strlen($censorWord); ?> </p>
  </body>
</html>