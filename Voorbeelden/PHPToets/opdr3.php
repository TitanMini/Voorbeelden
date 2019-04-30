<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" action="opdr3_verwerken.php" method="post">
      <table>
  <tr>
    <th>order</th>
  </tr>
  <tr>
    <td>Achternaam</td>
    <td><input type="text" name="anInput" value=""></td>
  </tr>
  <tr>
    <td>Voornaam</td>
    <td><input type="text" name="vnInput" value=""></td>
  </tr>
  <tr>
    <td>Adres</td>
    <td><input type="text" name="adresInput" value=""></td>
  </tr>
  <tr>
    <td>Postcode</td>
    <td><input type="text" name="postcodeInput" value=""></td>
  </tr>
  <tr>
    <td>Plaats</td>
    <td><select class="select" name="plaatsSelect">
      <option value=""></option>
      <option value="Amsterdam">Amsterdam</option>
      <option value="Rotterdam">Rotterdam</option>
      <option value="Den Bosch">Den Bosch</option>
      <option value="Utrecht">Utrecht</option>
      <option value="Overig">Overig</option>
    </select></td>
  </tr>
  <tr>
    <td>Email adres</td>
    <td><input type="text" name="emailInput" value=""></td>
  </tr>
  <tr>
    <td>Album</td>
    <td><select class="select" name="albumInput">
      <option value=""></option>
      <option value="Closing Time">Closing Time</option>
      <option value="Rumba Azul">Rumba Azul</option>
      <option value="Survivor">Survivor</option>
      <option value="Greatest Hits Queen">Greatest Hits Queen</option>
      <option value="3121 Prince">3121 Prince</option>
    </select></td>
  </tr>
  <tr>
    <td>
    <input type="submit" name="" action="FunctionName()" value="Versturen">
  </td>
  <td>
    <button type="button" name="button">Reset</button>
  </td>
  </tr>
</table>
    </form>
  </body>
</html>
