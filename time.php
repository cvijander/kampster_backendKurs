<?php 

echo strtotime("now"), "</br>";
echo strtotime("10 September 2000"), "</br>";
echo strtotime("+1 day"), "</br>";
echo strtotime("+1 week"), "</br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "</br>";
echo strtotime("next Thursday"), "</br>";
echo strtotime("last Monday"), "</br>";


$newYear = date("l",mktime('0','0','0','12','31','2024'));
$firstMay= date("l",mktime('0','0','0','5','1','2024'));
$christmas =date("l",mktime('0','0','0','1','7','2024'));


echo "Proslava Nove Godine ce biti u ".translateDayName($newYear). "<br/>";
echo "Prvi maj je u " .translateDayName($firstMay). "<br/>";
echo "Bozic je " .translateDayName($christmas) . "<br/>";


function translateDayName($day)
{
    
    switch ($day)
    {
        case "Monday"   : return "Ponedeljak";break;
        case "Tuesday"  : return "Utorak"    ;break;
        case "Wednesday": return "Sredu"     ;break;
        case "Thursday" : return "Četvrtak"  ;break;
        case "Friday"   : return "Petak"     ;break;
        case "Saturday" : return "Subotu"    ;break;
        case "Sunday"   : return "Nedelju"   ;break;
    }
}

echo "<hr/>";

$timestamp = time();
$getDate   = getdate($timestamp);
echo "<pre>";
   print_r($getDate);
echo "</pre>";
?>