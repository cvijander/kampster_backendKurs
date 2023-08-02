<?php 
if(!require_once('konekcija_na_bazu.php'))
{
    die("Ucitavanje fajla za konekciju nije uspelo.");
}

$upit ="SELECT * FROM employee";
$rezultat =$conn->query($upit);
?>

<html>
    <head>
    </head>

    <body>
        <div class="container">
            <div class = "row">
                <table class ="table table-striped">
                    <thead>
                        <tr>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Adresa</th>
                            <th>Telefon</th>
                            <th>Zaposlen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while($red = $rezultat->fetch_assoc()){
                       
                          //  echo "<pre>";
                           // var_dump($red);
                           // echo "</pre>";

                         ?>
                        <tr>
                            <td><?= $red['first_name']; ?></td>
                            <td><?= $red['last_name']; ?></td>
                            <td><?= $red['address'];?></td>
                            <td><?= $red['phone']; ?> </td>
                            <td><?= $red['hire_date']?></td>
                    </tr>
                    <?php }?>

                    </tbody> 
</body>
</html>






