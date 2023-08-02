<?php 

$server = "localhost";
$username= "root";
$password = "";
$database ="Backend_kurs";

//kreiranje konekcije 
$conn = new mysqli($server,$username,$password,$database);

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