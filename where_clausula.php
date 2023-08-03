<?php 
if(!require_once('konekcija_na_bazu.php'))
{
    die("Ucitavanje fajla za konekciju nije uspelo");
}

$date =date("Y-m-d");
$query="INSERT into employee VALUES (NULL, 'Petar','Peric','Programsekrsa 7','0652480777',800,'".$date."',2)";

if($conn->query($query))
{
    echo "Uspesno smo dodali zaposlenog";
}
else 
{
    echo "Nismo uspeli da dodamo zaposlenog";
}



?>