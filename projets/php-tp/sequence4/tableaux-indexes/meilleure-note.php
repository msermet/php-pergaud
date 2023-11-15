<?php

$notes=[10,12.5,14,7,15,9.5,8];

// Version 1

$maximum=$notes[0];
for ($i=0;$i<count($notes);$i++) {
    if ($notes[$i]>$maximum) {
        $maximum=$notes[$i];
    }
}

echo "La note maximum est : $maximum";

// Version 2

echo PHP_EOL;
echo "La note maximum est : ".max($notes);