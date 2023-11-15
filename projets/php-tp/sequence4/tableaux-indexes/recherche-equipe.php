<?php

$equipes=['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$equipeCherchee=readline("Saisir une équipe : ");
echo "------------Version boucle------------";
echo PHP_EOL;

for ($i=0;$i<count($equipes);$i++) {
    if (strtoupper($equipes[$i])==strtoupper($equipeCherchee)) {
        echo "$equipes[$i] sera présente à la prochaine coupe du monde";
        break;
    }
}

if ($i>=count($equipes)) {
        echo "$equipeCherchee ne sera pas présente à la prochaine coupe du monde";
}

echo PHP_EOL;
echo "------------Version fonction PHP------------";
echo PHP_EOL;

$equipesMaj = array_map('strtoupper', $equipes);
if (in_array(strtoupper($equipeCherchee),$equipesMaj)) {
    $key = array_search(strtoupper($equipeCherchee), $equipesMaj);
    echo "$equipes[$key] sera présente à la prochaine coupe du monde";
} else {
    echo "$equipeCherchee ne sera pas présente à la prochaine coupe du monde";
}