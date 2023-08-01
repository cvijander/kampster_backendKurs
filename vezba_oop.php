<?php 


$vozila=
   [
      1 =>
       [
           "brend" => "Volkswagen",
           "model" => "Golf",
           "cena"  => 15000
       ],
       2 =>
       [
           "brend" => "BMW",
           "model" => "320d",
           "cena"  => 25000
       ],
       3 =>
       [
           "brend" => "Fiat",
           "model" => "Punto",
           "cena"  => 10000
       ],
    ];

   class osoba
   {
    public $ime;  //definisanje svojstva 
    private $jmbg;  // provate


   }

   $osoba1 = new osoba();  //kreiranje novog objekta klase osoba 
   $osoba1->ime ="Petra";  //dodeljivanje vrednosti svojstva ime koje pripada osobi1
   //$osoba1->jmbg =123456789;

   var_dump($osoba1). "<br/>";
   echo "<br/>";

   echo "Svojstvo :" .$osoba1->ime ." je nova osoba. "."<br/>";


?>