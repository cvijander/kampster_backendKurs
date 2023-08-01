<?php 

// continue preskace trenutnu iteraciju 

$brendovi = ['Mercedes','BMW','Audi','Peugeot','Fiat','Opel','Reno'];

$nadjiBmw = false;

foreach ($brendovi as $brend)
{
    if($brend !='BMW')
    {
        continue;
    }

    $nadjiBmw =true;
    echo $brend;
}
echo "<hr/>";

$brendovi1 = ['Mercedes','BMW','Audi','Peugeot','Fiat','Opel','Reno'];

$nadjiBmw1 = false;
$brojac =0;


foreach ($brendovi1 as $brend1)
{
    $brojac++;
    if($brend1 =='BMW')
    {
        $nadjiBmw1 =true;
        break;
    }
}
    
    echo "Broj iteracija for petlje ". $brojac ;



?>