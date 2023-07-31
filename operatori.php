<?php 

$x =2;
$y =3;
$z = 12;
$m =5;


$zbir = $x + $y;
$razlika = $x -$y;
$mnozenje = $y *$z;
$deljenje = $z /$x;

echo "Zbir je: " .$zbir. "<br/>";
echo "Razlika : " .$razlika . "<br/>";
echo "Mnozenje: " .$mnozenje . "<br/>";
echo "Deljenje: " .$deljenje . "<br/>";

// moduo - ostatak od deljenja
$moduo = $z % $x ; // 12 podeljeno sa 2 je  6 a ostatak je 0.
$moduo1 = $z % $m ; // 12 podeljeno sa 5 je 2 dok je ostatak 2.
echo "Moduo bez ostatka: " .$moduo . "<br/>";
echo "Moduo sa ostatkom: " . $moduo1 . "<br/>";

?>
<?php 
$p = 10;
$p +=5;  // isto kao i $p = $p +5;
$p -=5;  // isto kao i $p =$p -5;
$p/=5;   //isto kao i $p =$p /5;
$p *=5;  // isto kao i $p = $p*5;

$p++;   // isto kai i $p=$p+1;
$p--;   // isto kao i$p =$p-1;

$O=2;
echo "O je: " . $O++. "<br/>"; //prvo ispisuje $o pa ga tek onda uvecava i zato se ovde ispisuje vrednost 2
echo "O je: " .$O . "<br/>";  // ovde je $o =3 zato sto je u prethodnoj liniji uvecan za 1
echo "<br/>";
$u = 5;
echo "u je: ".--$u . "<br/>"; // prvo smanjuje za 1 pa ga tek onda ispisuje
echo "u je: " .$u . "<br/>";   // ovde je isto 4 kaou prethodnom koraku 


?>
<?php 
$n =6;
$v =++$n; // ce da bude 7, jer prvo se $n uvecava pa tek onda upisuje u $v
echo "v je = ".$v. "<br/>";

$l=8;
$h=$l++;  // ce da bude 8 ,ajer ce l prvo da upise u h pa ce tek onda da se uveca za 1
echo "l :" .$l. "<br/>";
echo "h : " .$h . "<br/>";


?>