<?php
$celcius = 37.841;
$fahrenheit = $celcius * (9/5) + 32;
$reamur = $celcius * (4/5);
$kelvin = $celcius + 273.15;

echo "Fahrenheit (F) = ". (round($fahrenheit,4)) . "</br>" ;
echo "Reamur (R) = ". (round($reamur,4)) . "</br>" ;
echo "Kelvin (K) = ". (round($kelvin,4)) . "</br>";

?>