<?php

$nombre1 = (int)readline('Saisir un nombre (nombre1) : ');
$nombre2 = (int)readline('Saisir un nombre (nombre2) : ');
$nombreProvisoire=$nombre1;
$nombre1=$nombre2;
$nombre2=$nombreProvisoire;
echo "nombre1 est égal à $nombre1, nombre2 est égal à $nombre2";