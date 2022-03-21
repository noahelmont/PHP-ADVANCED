<?php 
echo "<ul>";
for ($x = 0; $x <= 18; $x++){

if ($x < 18){
    echo "<li>ik ben $x dus ik mag niet stemmen!</li>";
}
else{
    echo "<li>ik ben $x dus ik mag stemmen!</li>";
}
}
echo "</ul>";
?>