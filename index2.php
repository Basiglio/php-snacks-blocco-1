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
$age = intval($_GET["age"]);

if (strlen($name) > 3) {
  if (strpos($mail, "@") == false || strpos($mail, ".") == false)   {
    $result = "Accesso Negato";
  } else {
    $result = "Accesso Consentito";
  }
} else {
  $result = "Accesso Negato";
}



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>VERIFICA ACCESSO</h1>
    <p>
      <?php echo $result ?>
    </p>
  </body>
</html>
