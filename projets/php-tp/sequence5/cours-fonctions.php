<?php

function estPair (int $nombre) : bool {
    return $nombre%2==0;
}

function retourneIdentite (string $prenom, string $nom) : string {
    $identite=ucfirst(strtolower($prenom))." ".strtoupper($nom);
    return $identite;
}