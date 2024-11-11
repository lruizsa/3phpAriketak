<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herrien zerrenda</title>
</head>
<body>

<h1>Herrien zerrenda</h1>

<label for="herriak">Aukeratu herri bat:</label>

<select id="herriak">
  
    echo '<option>---</option>';

    <?php

        //$herriakLista Controller-ean dago sortua
        foreach ($herriakLista as $lista) {

            //echo htmlspecialchars($lista['izena']) . "<br>";

            echo '<option value="'.$lista['izena'].'">'.$lista['izena'].'</option>';
        }   

    ?>

</select>

<br>

<div id="egunekoZerrenda"></div>

<br>
<button onclick="egunekoIragarpena()">Iragarpena eguneko</button>

</body>
</html>
