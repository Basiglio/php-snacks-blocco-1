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
  "tappa" => [ //SECONDO LIVELLO
    "partita1" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Olimpia Milano",
      "squadraOspite" => "Cantù",
      "puntiCasa" => 55,
      "puntiOspite" => 60,
    ],
    "partita2" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Virtus Bologna",
      "squadraOspite" => "Fortitudo Bologna",
      "puntiCasa" => 102,
      "puntiOspite" => 30,
    ],
    "partita3" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Pallacanestro Varese",
      "squadraOspite" => "Victoria Libertas",
      "puntiCasa" => 56,
      "puntiOspite" => 90,
    ],
    "partita4" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Maremola",
      "squadraOspite" => "Lakers",
      "puntiCasa" => 100,
      "puntiOspite" => 200,
    ],
  ],
  "tappa" => [ //SECONDO LIVELLO
    "partita1" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Olimpia Milano",
      "squadraOspite" => "Cantù",
      "puntiCasa" => 55,
      "puntiOspite" => 60,
    ],
    "partita2" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Virtus Bologna",
      "squadraOspite" => "Fortitudo Bologna",
      "puntiCasa" => 102,
      "puntiOspite" => 30,
    ],
    "partita3" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Pallacanestro Varese",
      "squadraOspite" => "Victoria Libertas",
      "puntiCasa" => 56,
      "puntiOspite" => 90,
    ],
    "partita4" => [ //TERZO LIVELLO
      "squadraDiCasa" => "Maremola",
      "squadraOspite" => "Lakers",
      "puntiCasa" => 100,
      "puntiOspite" => 200,
    ],
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
        echo $matches["tappa"];
      }
      ?>
  </p>
    <h2>Tappa DUE</h2>
    <p></p>
  </body>
</html>
