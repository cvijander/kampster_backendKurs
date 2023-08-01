<?php 

class osoba{

    public $ime;
    public $godinaRodjenja;
    public $brojGodina;

     function __construct($argIme,$argGodinaRodjenja)
     {
        $this->ime = $argIme;
        $this->godinaRodjenja = $argGodinaRodjenja;
     }

    public function izracunajGodine()
    {
        $this->brojGodina = date("Y") - $this->godinaRodjenja;
        echo $this->ime . " ima " . $this->brojGodina . " godine <br/>";
    }
}

$osoba1 = new osoba("Pera",2000);
//$osoba1 -> ime ="Pera";
//$osoba1->godinaRodjenja =1994;
$osoba1->izracunajGodine();

$osoba2 = new osoba("Paja",1996);
$osoba2->izracunajGodine();

?>