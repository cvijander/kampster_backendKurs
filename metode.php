<?php 

class osoba 
{
  public $ime;

  public function izracunajGodine($godinaRodjenja)
  {
    return date("Y") - $godinaRodjenja;
  }


}

$osoba1 = new osoba();
$osoba1->ime = "Laza";

echo $osoba1->ime . " ima ".$osoba1->izracunajGodine(1994). " godine.";


?>