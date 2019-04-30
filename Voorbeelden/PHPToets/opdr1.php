<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Geef getal tussen 1 en 10:</p>
    <form class="form1" action="" method="POST">
      <input type="number" name="input" value="">
      <input type="submit" name="button" value="laat zien">
    </form>
    <?php
    $i = 1;
    $result = $i * $_POST['input'];
    if (isset($_POST['input']) && $_POST['input'] >= 1 && $_POST['input'] <= 11) {
      for ($i=1; $i < 10; $i++) {
      echo $i . " x " . $_POST['input'] . " is " . $i * $_POST['input'];
      echo "<br>";
      }
    }
    else {
      echo "vul een getal binnen 1 en 10 in";
    }
    ?>
  </body>
</html>
