<?php 

class osoba {

  public $ime;
  public $godinaRodjenja;
  public $brojGodina;

  public function izracunajGodine()
  {
    $this-> brojGodina =date("Y") - $this ->godinaRodjenja;
    return $this->brojGodina;
  }

}

$osoba1 =new osoba();
$osoba1 -> ime="Laza";
$osoba1 -> godinaRodjenja = 1994;
$osoba1 ->izracunajGodine();

$osoba2 = new osoba();
$osoba2 -> ime = "Mika";
$osoba2 ->godinaRodjenja = 2000;
$osoba2 ->izracunajGodine();


echo $osoba1->ime . " ima " .$osoba1->brojGodina. " godine<br/>";
echo $osoba2->ime . " ima " . $osoba2->brojGodina . " godine<br/>"; 



?>