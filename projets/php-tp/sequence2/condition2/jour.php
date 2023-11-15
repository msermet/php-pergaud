<?php

$date=date("d/m/Y");
if (date("D")=="Sat") {
    echo "Aujourd'hui nous sommes le $date";
    echo "Je vous souhaite un bon week-end";
} elseif (date("D")=="Sun") {
    echo "Aujourd'hui nous sommes le $date";
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Aujourd'hui nous sommes le $date";
    echo "Je vous souhaite une bonne journée";
}
