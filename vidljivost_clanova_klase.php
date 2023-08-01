<?php

// Public  - svi vide sve 
// Protected - dostupni unutar klase i funkcijama, u klasama koje su izvedene iz klase u kojoj su definisane 
// Private  dostupni samo u funkciji unutar te klase . 


class osoba {
    public $ime;
    private $jmbg;

}

$osoba1 = new osoba();
$osoba1->ime = "Peta";
//$osoba1->jmbg = 1234564; // ne vidi se , greska 
print_r($osoba1);





?>