<?php
require 'form.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traducteur</title>
</head>
<body>

<form action="form.php" method="POST" role="form" >
    <h1 style="color: grey">Traducteur Anglais - Français</h1>
    <label for="mot">Mot:</label><br>
    <input type="text" id="mot" name="mot">
    <br><br>
    <label for="traduction">Sens de traduction:</label>
    <select name="traduction">
      <option value="first">Anglais-Français</option>
      <option value="second">Français-Anglais</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Traduire">
    </form>

</body>
</html>