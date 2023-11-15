<?php

$phrase = readline('Saisir une phrase : ');
$mot = readline('Saisir un mot : ');
echo substr_count($phrase,$mot);