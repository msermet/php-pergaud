<?php

$nombre1 = (int)readline('Saisir un nombre (nombre1) : ');
$nombre2 = (int)readline('Saisir un nombre (nombre2) : ');
$nombre3 = (int)readline('Saisir un nombre (nombre3) : ');
$nombreMax=max($nombre1,$nombre2,$nombre3);
echo "Le nombre le plus grand est $nombreMax";
