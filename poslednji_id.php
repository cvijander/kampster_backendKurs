<?php 

If(!require_once('konekcija_na_bazu.php'))
{
    die('Ucitavanje fajla za konekciju nije uspelo');
}

//$date =date("Y-m-d");
// $query 

$first_name = "Jovan";
$last_name = "Mitic";
$address = "Deseta nova 125";
$phone = "0113232322";
$salary = 800;
$date = date("Y-m-d");
$department = 2;
$last_id =null;

$query ="INSERT INTO employee VALUES(NULL,'$first_name','$last_name','$address','$phone',$salary,'$date',$department)";

if($conn->query($query))
{
    $last_id = $conn->insert_id;
    echo "Uspesno smo dodali zaposlenog";
}
else 
{
    echo "Nismo uspeli da dodamo zaposlenog";
}



?>