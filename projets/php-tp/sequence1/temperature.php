<?php

$temperatureCelcius= (int)readline('Saisir une température en Celcius : ');
$temperatureFahrenheit=(($temperatureCelcius* 9 / 5) + 32);
echo "La température en Fahrenheit est : $temperatureFahrenheit °F";