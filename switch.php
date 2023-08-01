<?php 

$prosek = rand(0,500)/100;

//prosek 4.55

switch($prosek)
{

    case $prosek >=4.5:
        echo "Ucenik je odlican";
        break;

    case $prosek >=3.5:
        echo "Ucenik je vrlo dobar";
        break;

     case $prosek >=2.5:
        echo "Ucenik je dobar";
        break;    
    case $prosek >=2:
        echo "Dovoljan";
        break;   
        
     default :
     echo "Nedovoljan";   
}

echo " " .$prosek. "<br/>";


?>