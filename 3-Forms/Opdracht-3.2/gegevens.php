<?php

echo $_POST['Voornaam']."<br>";

echo $_POST['Achternaam']."<br>";

echo $_POST['Leeftijd']."<br>";

echo $_POST['Klas']."<br>";

echo $_POST['Adres']."<br>";

echo $_POST['plaatsnaam,']."<br>";

echo $_POST['favorieteband,']."<br>";

$kleuren = ['red' , 'blue' , 'gray' , 'purple' , 'white'];
foreach($kleuren as $kleur){ 
  echo "<option value= '$kleur'selected>$kleur</option>";
}    

echo '<body style="background-color:'.$_POST['kleur'].'">';

?>