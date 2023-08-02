<?php 

function izracunajGodine($godina)
{
  $trenutnaGodina =date("Y");
  return $trenutnaGodina - $godina;
}

$broj_godina = izracunajGodine(1994);

echo $broj_godina;

$a = 10;
$b = 20;

function saberi()
{
    global $a,$b;
   $zbir = $a + $b;
   return $zbir;

}

echo  saberi();


?>