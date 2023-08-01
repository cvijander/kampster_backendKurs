<?php 

$imena = ["Paja","Mika","Pera","Nemanja"];

foreach ($imena as $ime)
{
    echo "Zdravo ja se zovem " .$ime . "<br/>";
}


$automobili['Peugeot'] = '308';
$automobili['Audi'] = 'S8';
$automobili['Volksvagen'] = 'Golf 7';

foreach($automobili as $brend => $model)
{
    echo $brend. " je napravio novi model " . $model . "<br/>";
}

?>