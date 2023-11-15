<?php

// Déclarer et initialiser un tableau contenant des notes
$notes=[12,18,9,12,15,8,78,9,65,5,484,54];   // $notes=array(12,18,9);
// Accès à l'élément qui se trouve à l'index 0 dans le tableau $notes
echo $notes[0];
echo $notes[1];
echo $notes[2];
echo PHP_EOL;

// Affichage du tableau avec une boucle for
for ($i=0;$i<count($notes);$i++) {  // Fonction count($notes) permet de compter le nombre d'éléments dans la tableau
    echo $notes[$i].PHP_EOL;        // Si on connait la longueur du tableau on met $i<=5 (dernier élément à l'index 5 pour 6 éléments dans le tableau) et si on ne connait pas on met $i<count($notes)
}

// ou

echo PHP_EOL;
// Afficher le tableau avec une boucle foreach
foreach ($notes as $note) { // $note n'existe que dans le foreach
    echo $note.PHP_EOL;
}

echo PHP_EOL;
// Affichage du tableau avec une boucle for
for ($i=0;$i<count($notes);$i++) {
    echo "$i:$notes[$i]".PHP_EOL;   // Affiche l'index de chaque élément
}

// ou

echo PHP_EOL;
// Afficher le tableau avec une boucle foreach
foreach ($notes as $index => $note) {
    echo "$index:$note".PHP_EOL;    // Affiche l'index de chaque élément
}

// Affichage du tableau en mode debug
print_r($notes);
var_dump($notes);

echo PHP_EOL;

// Ajouter une nouvelle note dans le tableau
$notes[]=25;
print_r($notes);

// ou

array_push($notes,20);
print_r($notes);
array_push($notes,12,13.5,14);    // Ajout de plusieurs valeurs d'un coup
print_r($notes);