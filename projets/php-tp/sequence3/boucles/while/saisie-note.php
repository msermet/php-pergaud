<?php

$note=intval(readline("Entrez une note : "));

while ($note>20 || $note<0) {
    echo "La saisie du nombre doit être comprise entre 0 et 20 !";
    echo PHP_EOL;
    $note=intval(readline("Entrez une note : "));
}

echo "La saisie du nombre est correcte !";