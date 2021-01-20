<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php

$matches = [ //PRIMO LIVELLO
  [// SECONDO LIVELLO
    "squadraDiCasa" => "Milano",
    "squadraOspite" => "Cantù",
    "puntiCasa" => 55,
    "puntiOspite" => 60,
  ],
  [
    "squadraDiCasa" => "Roma",
    "squadraOspite" => "Firenze",
    "puntiCasa" => 102,
    "puntiOspite" => 85,
  ],
  [
    "squadraDiCasa" => "Torino",
    "squadraOspite" => "Livorno",
    "puntiCasa" => 200,
    "puntiOspite" => 40,
  ],
  [
    "squadraDiCasa" => "Bologna",
    "squadraOspite" => "Catania",
    "puntiCasa" => 95,
    "puntiOspite" => 20,
  ],
  [
    "squadraDiCasa" => "Ostia",
    "squadraOspite" => "Napoli",
    "puntiCasa" => 59,
    "puntiOspite" => 101,
  ],
];

// var_dump($matches);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Calendario Basket 2021</h1>
    <h2>Tappa UNO</h2>
    <p>
      <?php
      for ($i=0; $i < count($matches) ; $i++) {
        echo $matches[$i]["squadraDiCasa"] . " " . "-" . " " . $matches[$i]["squadraOspite"] . " " . "|" . " " . $matches[$i]["puntiCasa"] . " " . "-" . " " . $matches[$i]["puntiOspite"] . "<br>";
      }
      ?>
  </p>
  </body>
</html>
