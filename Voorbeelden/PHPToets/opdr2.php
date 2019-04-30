<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" action="" method="post">
      <p>Gewicht:</p><input type="number" name="inputgewicht" value="">
      <p>lengte:</p><input type="number" name="inputlengte" value="">
      <input type="submit" name="submit" value="Bereken">
    </form>
    <?php
    if (isset($_POST['inputgewicht']) && isset($_POST['inputlengte']) && $_POST['inputgewicht'] > 0 && $_POST['inputlengte'] > 0) {
      $gewicht = $_POST['inputgewicht'];
      $lengte = $_POST['inputlengte'] / 100 * $_POST['inputlengte'] / 100;
      $BMI = $gewicht / $lengte;

      echo "Uw BMI is: " . intval($BMI);
      echo "<br>";
      echo "Betekenis: ";
      if ($BMI < 16) {
        echo "Te laag gewicht";
      }
      elseif ($BMI >= 16 && $BMI < 25) {
        echo "Gewoon gewicht";
      }
      elseif ($BMI >= 25 && $BMI < 27) {
        echo "licht overgewicht";
      }
      elseif ($BMI >= 27 && $BMI < 30) {
        echo "Matig overgewicht";
      }
      elseif ($BMI >= 30 && $BMI < 40) {
        echo "Ernstig overgewicht";
      }

    }
     ?>
  </body>
</html>
