<?php

$emails=[
    "dupond" => "dupond@gmail.com",
    "martin" => "martin@free.fr",
    "durand" => "durand@laposte.net"
];

//foreach ($emails as $nom=>$email) {
//    echo "L'adresse email de $nom est $email".PHP_EOL;
//}

$domaine=strtolower(readline("Saisir un nom de domaine : "));
$emailExiste=[];
foreach ($emails as $nom=>$email) {
    if (strpos($email,$domaine)) {
        $emailExiste[]=$nom;
    }
}

if (empty($emailExiste)) {
    echo "Aucun email n'existe avec ce nom de domaine";
} else {
    foreach ($emailExiste as $nom) {
        echo "$nom possède ce nom de domaine dans son email";
    }
}