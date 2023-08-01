<?php 

$dan = date("D");

if($dan == "Fri")
{
    echo "Lep provod za vikend";
}
else if($dan =="Mon")
{
    echo "Tek je ponedeljak";
}
else 
{
    echo "Jos nije petak";
}


?>