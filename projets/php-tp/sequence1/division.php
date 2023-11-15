<?php

$nombre1 = (int)readline('Saisir un nombre entier : ');
$nombre2 = (int)readline('Saisir un nombre entier : ');
$division=$nombre1/$nombre2;
$divisionArrondie= round($division, 2);
echo "Le résultat de la division de $nombre1 par $nombre2 est $divisionArrondie";