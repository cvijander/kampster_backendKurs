<?php 

// apstraktne klase  nemaju konstruktor , tako da ne mogu da imaju objekat 
// kod njih samo nasledimo osnovne funkcionalnosti u nove klase, tako da se koriste 
// kao bazne klase 

// apstraktna klasa je svaka klasa koja sadrzi najmanje jednu apstraktnu metodu 

// apstraktna klasa ima samo ime metode i parametre 

abstract class Zivotinja
{
    public $ime;
    public $starost;

    public function opis()
    {
        return "Ime " .$this->ime . " star " .$this->starost ." godine ";
    }

    abstract public function pozdrav();
    
}  
 class Pas extends Zivotinja
 {
    public function pozdrav()
    {
        echo "Av av";
    }
 }

 class Macka extends Zivotinja
 {
    public function pozdrav()
    {
        echo "Mjau mjau";
    }
 }

 $pas1 = new Pas();
 $pas1->ime="Reks";
 $pas1->starost=4;
 echo $pas1->opis()."<br/>";
 $pas1->pozdrav();

 echo "<hr/>";

 $macka1 = new Macka();
 $macka1->ime = "Tom";
 $macka1->starost =2;
 echo $macka1->opis(). "<br/>";
 $macka1->pozdrav();


 
?>