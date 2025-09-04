<?php
$b=array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
for($i=0;$i<9;$i++){
    echo $b[$i]." , ";
}
echo "<br>";

sort($b);
echo "<ul>";
foreach($b as $i){
    echo "$i".",";
}
echo "</ul>";

$b[]="Los Angeles";
$b[]= "Calcutta";
$b[]= "Osaka";
$b[]= "Beijing";

sort($b);
echo "<ul>";
    foreach($b as $i){
        echo "$i".",";
    }
    echo "</ul>";
?>