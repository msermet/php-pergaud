<?php

$n=15;
for ($compteur=0;$compteur<20;$compteur++) {
    echo $n." ";
    if ($n%2==0) {
        $n=$n/2;
    } elseif ($n%2!=0) {
        $n=$n*3+1;
    }
}