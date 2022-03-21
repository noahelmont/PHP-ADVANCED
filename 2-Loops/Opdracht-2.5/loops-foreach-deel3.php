<?php

$student  = array(
    "Voornaam:" => "Jan",
    "Achternaam:" => "Janssen",
    "klas:" => "9A",
    "Leeftijd:" => 17,
    "Woonplaats:" => "Amstelveen"
);

foreach ($student as $key => $value){
    echo " $key $value <br> ";
}

?>