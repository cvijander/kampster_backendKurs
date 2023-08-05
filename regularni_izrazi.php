<?php 

//preg _match 

$tekst = "Moje ime je Paja";

if(preg_match("/Paja/",$tekst))
{
    echo "Pronadjen je Paja u tekstu<br/>";
}
else 
{
    echo "Nije pronadjen Paja<br/>";
}

if(preg_match("/Paja$/",$tekst))
{
    echo "String se zavrsava na Paja"."<br/>";
}
else 
{
     echo "String se ne zavrsava na Paja<br/>";
}



?>