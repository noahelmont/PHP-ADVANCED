<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body style="background-color:<?php echo $_POST['achtergrondkleur']; ?>;">

    <?php
        function row($key, $value){

        echo "<td style='border: ".$_POST['tabel-border']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$key</td>";
        echo "<td style='border: ".$_POST['tabel-border']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$value</td>";
     
    }

       $info = array("Naam"=>"Noah", "Leeftijd"=>"21","Woonplaats"=>"Amsterdam", "Klas"=>"1B", "Hobby"=>"Basketbal");

    echo "<table style='border:  ".$_POST['tabel-border']."px solid' width='250' cellspacing='0'>";

     foreach($info as $key =>$value){  
        row($key, $value);
     }

    echo "</table>"

?>

</body>
</html>