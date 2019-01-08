<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <body>
    <h3> Lidé </h3>
    <?php
      $people = array(
        "Matěj Kneifl",
        "Matěj Dalekorej",
        "Martin Kokeš",
        "Kristián Klimek",
        "Jan Pilař"
      );

      foreach ($people as $index => $value) {
        echo ($index +1) . ". Místo : " . $value . "<br>";
      }

      $pc['CPU']="Intel Core i7 8600";
      $pc['GPU']="Nvidia Geforce RTX 2060";
      $pc['RAM']="HyperX 16GB";
      $pc['HDD']="Kingston 1TB";
      $pc['SSD']="Samsung 860 500GB";
      $pc['OS']="Windows 10 Home Edition";

      ?>
      <hr />
      <h3> PC </h3>
      <?php
      foreach ($pc as $index => $value) {
        echo $index . " : " . $value . "<br>";
      }
     ?>
  </body>
  </html>
