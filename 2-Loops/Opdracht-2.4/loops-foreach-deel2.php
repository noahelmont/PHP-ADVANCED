<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
  echo "<select>";
  echo "<ul>";
    foreach ($klassen as $klas){
        echo "<li> <option value='$klas'>$klas</option> </li>";
    }
    echo "</ul>";
  echo "</select>";
?>

<button>verzend</button>

</body>
</html>