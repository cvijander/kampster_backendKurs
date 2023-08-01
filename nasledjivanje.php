<?php 

class Osoba{
 public $ime;
 public $prezime;

 public function __construct($ime,$prezime)
 {
    $this->ime = $ime;
    $this ->prezime = $prezime;
 }

 public function celoIme()
 {
    return $this->ime . " " .$this->prezime;
 }

 //nasledjuje je samo public i protected.. private se ne nasledjuje ..
}

class Student extends Osoba
{
    public $brojIndexa;

    public function __construct($brojIndexa,$ime,$prezime)
    {
        parent::__construct($ime,$prezime);
        $this->brojIndexa =$brojIndexa;
    }
}

 $student1 = new Student('50/12',"Milica","Stojkovic");
 //$student1->ime = "Pera";
 //$student1->prezime = "Petrovic";
 //$student1->brojIndexa = "37/13";

 echo "Prvi student se zove " .$student1->celoIme() . " i njegov broj indexa je " .$student1->brojIndexa. "<br/>";

?>