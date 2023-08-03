<?php 

if(!require_once('konekcija_na_bazu.php'))
{
    die('Ucitavanje falja za konekciju nije uspelo');
}

$prepare = $conn->prepare("INSERT INTO department(name,boss_id) VALUES(?,?)");

$prepare->bind_param("si",$name, $boss_id);

$name = "Odrzavanje";
$boss_id=4;
$prepare->execute();

$name ="Obezbedjenje";
$boss_id=2;
$prepare->execute();

if(!$prepare->error)
{
    echo "Uspesno smo dodali odeljenja";
}
else 
{
    echo "Nismo uspeli";
}


?>