<?php 
/* 
echo()
print()
print_r() prikazuje niz
var_dump()  prikazuje i 
*/

echo "Ispis preko echo funkcije: Dobar dan" . "<br/>";

print("Ispis preko print funkcije: Dobar dan")."<br/>";

$niz [0]= "Paja";
$niz[1]=109;
$niz[2] = null; 


var_dump($niz[0])."<br/>";
echo"<br/>";
var_dump($niz[2]). "<br/>";

echo "<hr>";
print($niz[0])."<br/>";
echo"<br/>";
print_r($niz[2]) . "<br/>";






?>