<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Uw bestelling:</h3>

<?php
  $voorraad = array("Closing Time"=>"in voorraad", "Rumba Azul"=>"uit voorraad", "Survivor"=>"in voorraad", "Greatest Hits Queen"=>"uit voorraad", "3121 Prince"=>"in voorraad");

  $achternaam = $_POST['anInput'];
  $voornaam = $_POST['vnInput'];
  $adres = $_POST['adresInput'];
  $postcode = $_POST['postcodeInput'];
  $plaats = $_POST['plaatsSelect'];
  $email = $_POST['emailInput'];
  $album = $_POST['albumInput'];

  if ($achternaam != null && $voornaam != null && $adres != null && $postcode != null && $plaats != null && $email != null && $album != null) {
    echo "Achternaam: " . $achternaam;
    echo "<br>";
    echo "Voornaam: " . $voornaam;
    echo "<br>";
    echo "Adres: " . $adres;
    echo "<br>";
    echo "Postcode: " . $adres;
    echo "<br>";
    echo "Plaats: " . $plaats;
    echo "<br>";
    echo "Email: " . $email;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "U hebt het volgende album besteld:";
    echo "<br>";
    echo $album;
    echo "<br>";
    echo "<br>";
    echo "Dit album is ". $voorraad[$album];
} else {
    echo "Vul A.U.B. alles in";
  }
?>

</body>
</html>
