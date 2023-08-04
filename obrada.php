<?php 

if(isset($_GET['btnSubmit']))
{
    if(isset($_GET['email']) && !empty($_GET['email'])&& isset($_GET['password'])&& !empty($_GET['password']))
    {
        $email = $_GET['email'];
        $password = $_GET['password'];
    }
    else 
    {
        $email = 'Paja@';
        $password='123456';
    }

    echo "Uspesno smo pokupili podatke iz formulara na serveru<br/>";
    echo "Podaci su <br> email:" .$_GET['email'] . "<br/>" . $_GET['password']."<br/>";
    echo "Pol je " .$_GET['pol']."<br/>";
    echo $_GET['skriveno']."<br/>";

    if(isset($_GET['jezici']))
    {
        foreach($_GET['jezici'] as $jezik)
        {
             echo $jezik."<br/>";
        }
    }

    if($_GET['grad']!='0')
    {
        echo $_GET['grad']."<br/>";
    }
    else 
    {
        echo "Nist izabrali grad";
    }

    echo "Vaša IP adresa je : ".$_GET['ip_adresa']."<br/>";
    echo "Vaš pretraživač  : ".$_GET['pretrazivac'] ."<br/>";  
    
}

?>