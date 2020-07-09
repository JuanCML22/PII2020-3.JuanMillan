<?php

$name = "Juan Carlos Millan";
//echo $name;

$year = 2020;
//print $year;

/*
$camelCase = "Juan Carlos";
$lowercase = "Juan Carlos";
$under_score = "Juan Carlos"
*/

$born_year = 1985;

// + - * /
$edad = $year - $born_year;
//echo $edad;

if ($edad < 60){
    echo "You are young";
    echo "<br>";
    echo "Cool, let´s party!";
}else{
    echo "You are old";
}

?>