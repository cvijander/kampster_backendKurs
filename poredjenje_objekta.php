<?php 

class osoba{

    public $ime;

}

$osoba1 = new osoba();
$osoba1 ->ime = "Pera";
$osoba2 = new osoba();
$osoba2->ime = "Pera";
$osoba3 =$osoba1;

echo "Poredjenje po nazivu <br/>";
if($osoba1==$osoba2)
{
    echo "Tacno da su osoba1 i osoba 2 isti <br/>"; //dakle isti je naziv u polju 
}
else 
{
    echo "Nisu isti <br/>";
}

echo "Poredjenje po instanci tj da li je isti objekat<br/>";

if($osoba1 === $osoba2)
{
    echo "U pitanju je isti objekat <br/>";
}
else 
{
    echo "Nazalost u pitanju su dva razlicita objekta<br/>";
}
echo "<hr/>";

echo "Poredjenje po nazivu <br/>";
if($osoba1==$osoba3)
{
    echo "Tacno da su osoba1 i osoba 2 isti <br/>"; //dakle isti je naziv u polju 
}
else 
{
    echo "Nisu isti <br/>";
}

echo "Poredjenje po instanci tj da li je isti objekat<br/>";

if($osoba1 === $osoba3)
{
    echo "U pitanju je isti objekat <br/>";
}
else 
{
    echo "Nazalost u pitanju su dva razlicita objekta<br/>";
}




?>