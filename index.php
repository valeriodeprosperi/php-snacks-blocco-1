<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. -->
<!-- Stampiamo a schermo tutte le partite con questo schema: -->
<!-- Olimpia Milano - Cantù | 55-60 -->
<?php
  $matches = [

      [
        "casa" => "Roma",
        "ospite" => "Milano",
        "punti_casa" => 34,
        "punti_ospiti" => 31,
      ],
      [
        "casa" => "Orbetello",
        "ospite" => "Treviso",
        "punti_casa" => 54,
        "punti_ospiti" => 29,
      ],
      [
        "casa" => "Cosenza",
        "ospite" => "Salerno",
        "punti_casa" => 15,
        "punti_ospiti" => 72,
      ],

  ];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p>
       <?php
          for ($i=0; $i < count($matches); $i++) {
            echo "<br>";
            echo $matches [$i]["casa"] . "";
            echo "-";
            echo $matches [$i]["ospite"] . "";

            echo $matches [$i]["punti_casa"] . "";
            echo "-";
            echo $matches [$i]["punti_ospiti"] . "";




          }
        ?>
     </p>
   </body>
 </html>


 
