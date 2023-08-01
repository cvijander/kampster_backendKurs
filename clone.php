<?php 

class osoba{

    public $ime;
}

$osoba1 = new osoba();
$osoba1 -> ime = "Pera"; // dali smo prvo ime
$osoba2 = clone $osoba1; // osoba 2 ima isto ime kao osoba 1 dakle Pera
$osoba1->ime = "Mika";  // osobi 1 menjamo ime na Mika 


echo "Vrednost svojstva ime objekta  osoba1 je ".$osoba1->ime."<br/>";
echo "Vrednost svojstva ime objekta osoba 2  je: " .$osoba2->ime. "<br/>";

$osoba3 = new osoba(); // pravimo novu osobu 
$osoba3->ime = "Slobodan";
$osoba4 = $osoba3; // dakle osoba 4 pokazuje na osobu 3 -tj ima referencu na nju 
$osoba3-> ime = "Milica";

echo "Vrednost osobe 3 tj imena je " .$osoba3->ime . "<br/>";
echo "Vrednost osobe 4 tj imena je " .$osoba4->ime . "<br/>";

$osoba5= new osoba();
unset($osoba5); // brisanje objekta osoba 5
// var_dump($osoba5);  greska obrisana je i samo pokauje na NULL 




?>

