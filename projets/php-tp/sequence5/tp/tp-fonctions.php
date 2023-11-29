<?php

function convertirCelsiusFahrenheit(float $tempCelcius) : float {
    return $tempCelcius*1.8+32;
}

function genererMotDePasse(int $longueur) : string {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $longueurMax = strlen($caracteres);
    $motDePasse = '';
    for ($i = 0; $i < $longueur; $i++) {
        $motDePasse .= $caracteres[rand(0, $longueurMax - 1)];
    }
    return $motDePasse;
}

function genererNumeroAdherent() : string {
    $numeroAdherent="AD-";
    for ($i = 0; $i < 6; $i++) {
        $numeroAdherent .= rand(0, 9);
    }
    return $numeroAdherent;
}

function genererAcronyme(string $phrase) : string {
    $phrase=explode(" ",$phrase);
    $acronyme="";
    foreach ($phrase as $mot) {
        $lettre=strtoupper(substr($mot,0,1));
        $acronyme .=$lettre;
    }
    return $acronyme;
}

