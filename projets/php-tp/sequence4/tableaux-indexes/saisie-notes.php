<?php

$tableauNotes=[];
$compteur=0;
$a=true;

while ($a==true) {
    $noteUtilisateur=readline("Saisir une note (q pour arrêter) : ");
    if ($noteUtilisateur!="q") {
        if ($noteUtilisateur>=0 && $noteUtilisateur<=20) {
            $tableauNotes[]=$noteUtilisateur;
            $compteur++;
        } else {
            echo "La note saisie est incorrecte .";
            echo PHP_EOL;
        }
    } else {
        $a = false;
    }
}

echo "Vous avez saisi $compteur notes.";
echo PHP_EOL;
echo "Les notes saisies sont ";
foreach ($tableauNotes as $note) { // $note n'existe que dans le foreach
    echo $note." ";
}

// Partie 2

$tabNotesSup=[];
$moyenne=0;
$nombre=0;

foreach ($tableauNotes as $noteSup) {
    if ($noteSup >= 10) {
        $nombre++;
        $tabNotesSup[]= $noteSup;
        $moyenne+=$noteSup;

    }
}

if (count($tabNotesSup)==0) {
    echo PHP_EOL;
    echo "Il n'y a aucune note supérieure ou égale à 10.";
} else {
    $moyenne=$moyenne/$nombre;
    echo PHP_EOL;
    echo "La moyenne des notes supérieures ou égales à 10 est ".$moyenne;
}

