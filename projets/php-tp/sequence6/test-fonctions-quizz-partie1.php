<?php

require_once "questions-quizz.php";
require_once "fonctions-quizz-partie1.php";

$resultat="";
foreach ($questions as $indexQuestions=>$question) {
    echo $question["question"].PHP_EOL;
    foreach ($question["reponses"] as $reponse) {
        echo $reponse.PHP_EOL;
    }
}