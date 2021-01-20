<!-- // PHP Snack 2:
// Passare come parametri GET name, mail e age e
// verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti
// “Accesso negato”. -->


<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>i tuoi dati inseriti</h1>
    <p>
      <?php echo $name . "<br>" . $mail . "<br> " . $age ?>
    </p>
  </body>
</html>
