<?php 

$ime = "Pera";
$prezime = "Detlic";
// spajanje dva stringa
$imePrezime = $ime ." " .$prezime;
//ispisivanje dva stringa u sklopu neke recenice
echo "Pozdrav kampsteri, moje ime je " .$ime . " prezivam se " . $prezime . "<br/>"; 
?>
<?php 
$x= "Dusko";
echo "Vrednost promenljive: ".$x ."| Tip promenljive :" .gettype($x);
echo "<br/>";

$x1 = "Dusko Dugousko";
echo "Vrednost promenljive: ".$x1. "| Tip promenljive: " . gettype($x1);
echo "<br/>";

$y ="5";
echo "Vrednost promenljive : " .$y . "| Tip promenljive: " .gettype($y);
echo "<br/>";

$z="19.34";
echo "Vrednost promenljive: " .$z . "| Tip promenljive: " .gettype($z);
echo "<br/>";

$q = "Dusko Dugousko 5 19.34";
echo "Vrednost promenljive : " .$q . "| Tip promenljive: " .gettype($q);
echo "<br/>";





?>
