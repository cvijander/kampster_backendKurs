<?php 
$x = 4;
$y =6;
$z = "Paja";
$u = "Pera";
$t =true;
$f =false;

echo "Da li je x == y ? <br/>";
var_dump($x == $y);
echo   "<br/>";

echo "Da li je x razlicita od y ? <br/>";
var_dump($x != $y) ;
echo  "<br/>";

echo "Da li nisu jednaki: <br/>";
var_dump( $x<>$y);
echo"<br/>";

echo "Da li imaju istu vrednost i isti tip? <br/>";
var_dump($x === $y)."<br/>";
echo "<br/>";

echo "Da li je x vece od y? <br/>";
var_dump($x > $y). "<br/>";
echo "<br/>";

echo "Da li je x manje od y ? <br/>";
var_dump($x < $y). "<br/>";
echo"<br/>";

echo "Da li je X vece i jednako y ? <br/>";
var_dump($x >= $y). "<br/>";
echo "<br/>";

echo "Da li je x manje ili jednako y ? <br/>";
var_dump($x <= $y)."<br/>";
echo"<br/>";


echo "Da li je Paja == Peri ? <br/>";
var_dump($z==$u). "<br/>";
echo "<br/>";

echo "Poredjenje tacnog i netacnog <br/>";
var_dump($t and $f). "<br/>";
echo "<br/>";

echo "Poredjenje tacnog ili netacnog <br/>";
var_dump( $t or $f). "<br/>";
echo "<br/>";

echo "Poredjenje tacnog i netacnog koristeci & (logicno i) and <br/>";
var_dump($t && $f). "<br/>";
echo"<br/>";

echo "Poredjenje tacnog ili netacnog koristeci || (logicko ili )";
var_dump($t || $f). "<br/>";
echo "<br/>";







?>