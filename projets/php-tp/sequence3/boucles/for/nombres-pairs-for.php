<?php

$nombreUtilisateur=readline("Entrez un nombre maximal : ");
for ($nombre=0;$nombre<=$nombreUtilisateur;$nombre++){
    if ($nombre%2==0){
        echo $nombre." ";
    }
}