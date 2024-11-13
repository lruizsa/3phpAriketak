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
      
    <?php

        echo '<option>---</option>';

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
<form action="../public/herriak_gehitu.php" method="POST">
    <label for="izena">Gehitu Beste herri bat:</label>
    <input type="text" name="izena" id="izena" required>
    <button type="submit">Gehitu</button>
</form>



<button>Aldatu</button><br>

</body>
</html>
