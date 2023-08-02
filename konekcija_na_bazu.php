<?php 

$server = "localhost";
$username= "root";
$password = "";
$database ="Backend_kurs";

//kreiranje konekcije 
$conn = new mysqli($server,$username,$password,$database);
//

//mysql_set_charset($conn,'utf8');

//provera konekcije connection
if($conn->connect_error)
{
    die("Konekcija nije uspela: " .$conn->connect_error);
}
else 
{
    echo "Konekcija je uspela";
}




?>