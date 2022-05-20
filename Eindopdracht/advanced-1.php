<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form name="Forum" method="POST" action="advanced-2.php">
    
    <p>tabel-border<br> <input name="tabel-border" type="number"></p>
    <p>padding<br> <input name="padding" type="number"></p>
    
<p>Achtergrond kleur<br>
    <select id="achtergrond kleur" name="achtergrondkleur"></p>

        <?php 
        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>

    </select></p>

<p>Tekst kleur<br>
    <select id="kleur" name="tekst"></p>

      <?php

        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }

      ?>

    </select></p>

<br>
<button type="submit">Verzend</button>

</form>

</body>
</html>