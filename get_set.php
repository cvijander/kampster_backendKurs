<?php 

class osoba{

private $ime;
private $godinaRodjenja;

function __set($name,$value)
{
$this->$name = $value ;  //this -> ime ="Pera";
}

function __get($name)
{
    return $this->$name; //return $this->ime
}

}

$osoba1 =new osoba();
$osoba1->__set("ime","Pera");
echo "Vracamo ime pomocu funkcije osoba->get(): " .  $osoba1->__get("ime");



?>