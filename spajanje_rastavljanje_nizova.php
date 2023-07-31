<?php 

echo "Spajanja clanova iz niza u jedan string koristeci | <br/>";
$automobili= ["Peugeot","Bmw","Audi","Fiat"];
$automobili_string = implode(" | ",$automobili);
echo $automobili_string;



?>
<?php 

$string_automobila = "Audi:BMW:Peugeot:Fiat";
$niz_automobila =explode(':',$string_automobila);

echo "<pre>";
print_r($niz_automobila);
echo "</pre>";


?>