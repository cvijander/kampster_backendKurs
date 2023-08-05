<?php 

$ime="Paja";
$prezime="Patak";
$email= "cvija85@gmail.com";
$emailPosiljaoca="paja@gmail.com";
$tekst = "Proba slanja emaila";
$subject="Poruka poslata iz PHp-a";

$sadrzaj = "Posiljalac: ".$ime." " .$prezime. 'email posiljaoca: '.$emailPosiljaoca. "Teskt poruke: ".$tekst.".";

try 
{
    mail($email,$subject,$sadrzaj);
    
}

catch (Exception $e)
{
    var_dump($e);
}



?>