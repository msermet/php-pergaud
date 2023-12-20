<?php

function AfficherQuestions (array $tabquestion) : array {
    $resultat=[];
    foreach ($tabquestion as $id=>$phrase) {
        ["question"=>$question]=$phrase;
        $resultat[]=array("question"=>$question);
    }
    return $resultat;
}