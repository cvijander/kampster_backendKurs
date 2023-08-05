<?php 


setcookie('mojKolacic','Moj prvi kolacic', time()+3600);

setcookie("korisnik[ime]","Paja");
setcookie("korisnik[prezime]","Patak");
setcookie("korisnik[grad]","Beograd");
setcookie("korisnik[godiste]",1999);

foreach($_COOKIE['korisnik'] as $kljuc=>$vrednost)
{
    echo ucfirst($kljuc).":".$vrednost."<br/>";
}

?>