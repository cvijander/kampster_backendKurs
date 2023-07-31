<?php
/* 

Ovo su PHP funkcije za sortiranje nizova:

sort() - sortira elemente u rastućem redosledu 
rsort() - sortira elemente u opadajućem redosledu 
asort() - sortira elemente asocijativnog niza prema vrednosti rastući 
ksort() - sortira elemente asocijativnog niza prema ključu rastući 
arsort() - sortira elemente asocijativnog niza prema vrednosti opadajući 
krsort() - sortira elemente asocijativnog niza prema ključu opadajući 

*/

$brojevi = [16,4,8,23,18,42,111];
$gradovi = ["Beograd", "Novi Sad", "Arandjelovac", "Krusevac"];

echo "Sortiraj klasican niz po abecedi <br/>";

sort($brojevi);
echo "<pre>";
print_r($brojevi);
echo "</pre>";

echo "Sortitanje gradova po abecedi <br/>";

sort($gradovi);
echo"<pre>";
print_r($gradovi);
echo"</pre>";


echo "Sortiranje klasican niz od obrnuto abecedni niz <br/>";

rsort($brojevi);
echo "<pre>";
print_r($brojevi);
echo "</pre>";

echo "Sortitanje gradova po abecedi <br/>";

rsort($gradovi);
echo"<pre>";
print_r($gradovi);
echo"</pre>";

echo "Asort funkcija ..sortita po vrednosti <br/>";
$rang_lista= ["Patak Daca" =>90,
              "Brzi Gonzales" => 50,
               "Dusko Dugousko" => 100,
];

asort($rang_lista);

echo "<pre>";
print_r($rang_lista);
echo "</pre>";


echo "Ksort funkcija ..sortita po kljucu <br/>";
$rang_lista= ["Patak Daca" =>90,
              "Brzi Gonzales" => 50,
               "Dusko Dugousko" => 100,
];

ksort($rang_lista);

echo "<pre>";
print_r($rang_lista);
echo "</pre>";


echo "Arsort funkcija ..sortita po vrednosti opadajuce <br/>";
$rang_lista= ["Patak Daca" =>90,
              "Brzi Gonzales" => 50,
               "Dusko Dugousko" => 100,
];

arsort($rang_lista);

echo "<pre>";
print_r($rang_lista);
echo "</pre>";


echo "Krsort funkcija ..sortita po kljucu opadajuci <br/>";
$rang_lista= ["Patak Daca" =>90,
              "Brzi Gonzales" => 50,
               "Dusko Dugousko" => 100,
];

krsort($rang_lista);

echo "<pre>";
print_r($rang_lista);
echo "</pre>";



?>