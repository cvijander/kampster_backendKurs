<?php 

if(isset($_COOKIE['mojKolacic']))
{
    echo $_COOKIE['mojKolacic'];
}

else 
{
    echo "Ne postoji kolacic";
}

foreach($_COOKIE['korisnik'] as $kljuc=>$vrednost)
{
    echo ucfirst($kljuc).":".$vrednost."<br/>";
}
?>