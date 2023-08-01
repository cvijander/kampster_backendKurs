<?php 

class Zaposleni 
{
    public $ime;
    public $prezime;
    public $plata;

      public function __construct($ime,$prezime,$plata)
      {
        $this->ime =$ime;
        $this->prezime =$prezime;
        $this->plata = $plata;        
        
      }

      public function izracunajBonus()
      {
        return $this->plata*1.1;
      }
}

class Konobar extends Zaposleni
{
    public $baksis;

    public function __construct($ime,$prezimee,$plata,$baksis )
    {
        parent:: __construct($ime, $prezimee, $plata);
        $this->baksis = $baksis;
    }

    public function izracunajBonus()
    {
        return parent::izracunajBonus() + $this->baksis;
    }
}

$konobar1 = new Konobar("Pera","Perci", 500,100);
echo $konobar1->izracunajBonus(); // rezultat 650 



?>