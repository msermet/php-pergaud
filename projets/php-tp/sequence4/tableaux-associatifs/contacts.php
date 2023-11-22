<?php

$contacts=[
    "Ethan"=>"0679986324",
    "Andy"=>"0643213338",
    "Phong"=>"0785283994",
    "Papanoël"=>"3630",
    "Macron"=>"0640529856"
];

$nomExiste=ucfirst(strtolower(readline("Saisir le nom d'un contact : ")));
$x=false;
$contactExiste=[];
foreach ($contacts as $nom => $numero) {
        $nom=ucfirst(strtolower($nom));
        if ($nom==$nomExiste) {
            $contactExiste[]=$numero;
        }
}

if (empty($contactExiste)) {
    echo "Le contact $nomExiste n'existe pas";
} else {
    foreach ($contactExiste as $numero) {
        echo "Le numéro de $nomExiste est $numero";
    }
}

