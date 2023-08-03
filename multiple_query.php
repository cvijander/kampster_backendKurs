<?php 

If(!require_once('konekcija_na_bazu.php'))
{
  die("Ucitavanje fajla za konekciju nije uspelo");
}

$date = date("Y-m-d");
$query = "INSERT INTO employee VALUES(null,'Nikola','Pecic','Brace Rajt 10','0113565665',1000,'$date',1);";
$query.="INSERT INTO department VALUES(null,'Ljudski resursi',3);";
$query.="INSERT INTO department VALUES(null, 'Menadzment',5);";

if($conn->multi_query($query))
{
    echo "Uspesno smo dodali i odeljenja i zaposlenog";
}

else 
{
    echo "Nismo uspeli";
}


?>