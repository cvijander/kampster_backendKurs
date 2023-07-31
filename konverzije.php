<?php 

$x=10;
$y = -2.5;
$z="20";
$q ="5k";

$a = $x* $z;
$b = $z /$y;
$c =$z /$q;


echo "Vrednost promenljive: " .$a . " | Tip promenljive: ".gettype($a). "<br/>";
echo "Vrednost promenljive: " . $b . "| Tip promenljive: " .gettype($b). "<br/>";
echo "Vrednost promenljive: " .$c . " | Tip promenljive: " .gettype($c) . "<br/>";

 
?>

<?php 

$a =10;
$b =-2.5;
$c = "20";
$d ="5k";

$novo_a = (string)$a;
$double_a= (double)$a;
$novo_b = (int)$b;
$novo_c = (int)$c;
$novo_d = (int)$d;

echo "Vrednost promenljive: " . $novo_a. " | Tip promenljive: " .gettype($novo_a). "<br/>";
echo "Vrednosto promenljive: " .$double_a . " | Tip promenljive: " .gettype($double_a) . "<br/>";
echo "Vrednost promenljive: " .$novo_b . " | Tip promenljive: " .gettype($novo_b) ."<br/>";
echo "Vrednosto promenljive: " .$novo_c . " | Tip promenljive: " .gettype($novo_c) . "<br/>";
echo "Vrednost promenljive: " . $novo_d . " | Tip promenljive: " .gettype($novo_d) . "<br/>";




?>