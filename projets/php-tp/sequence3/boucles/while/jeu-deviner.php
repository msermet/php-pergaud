<?php

echo "Bienvenue dans le jeu de devinette !
Le but du jeu est de deviner un nombre entre 1 et 100.
Vous avez entre 10 et 15 essais pour trouver le nombre.
Bonne chance !";
echo PHP_EOL;
$x=0;
while ($x==0){  //programme qui va tourner en boucle tant que x est égal à 0
    echo PHP_EOL;
    $menu = readline("    1. Jouer
    2. Voir les résultats
    3. Voir les résultats d'un jour
    4. Voir les résultats d'un joueur
    5. Quitter
    Votre choix (1,2,3,4 ou 5) : ");

    $fichier = fopen("resultats.txt", "a+");

    if ($menu == 1) {  //lorsque l'utilisateur appuie sur 1 le jeu se lance avec ce qui suit
        $pseudo = readline("Saisir votre pseudo : ");
        $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
        $nbOrdinateur = random_int(1, 100);
        $nbtentative = random_int(10, 15);
        $compteur = 1;

        while ($nbUtilisateur<1 || $nbUtilisateur>100) {
            echo "Votre nombre n'est pas compris entre 1 et 100 !";
            echo PHP_EOL;
            $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
        }
        while ($nbUtilisateur != $nbOrdinateur && $compteur<$nbtentative ) {
            if ($nbUtilisateur<$nbOrdinateur) {
                $compteur+=1;
                echo "Le nombre que vous avez saisi est trop petit ";
                echo PHP_EOL;
                $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
            } elseif ($nbUtilisateur>$nbOrdinateur) {
                $compteur+=1;
                echo "Le nombre que vous avez saisi est trop grand ";
                echo PHP_EOL;
                $nbUtilisateur = readline("Saisir un nombre entre 1 et 100 : ");
            }
        }
        if ($compteur <= 10 && $nbUtilisateur == $nbOrdinateur) {
            echo "Excellent $pseudo : vous avez trouvé le nombre $nbOrdinateur en $compteur tentatives !";
            echo PHP_EOL;
            fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Excellents ! Vous avez trouvé le nombre en $compteur essais.\n");
        } elseif ($compteur > 10 && $nbUtilisateur == $nbOrdinateur) {
            echo "Bien joué $pseudo : vous avez trouvé le nombre $nbOrdinateur en $compteur tentatives !";
            echo PHP_EOL;
            fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Bien joué ! Vous avez trouvé le nombre en $compteur essais.\n");
        } elseif ($compteur == $nbtentative && $nbUtilisateur != $nbOrdinateur) {
            echo "Désolé $pseudo : vous avez atteint le nombre maximum de tentatives ! Le nombre était $nbOrdinateur";
            fwrite($fichier, date("d/m/Y H:i:s")." - Pseudo : $pseudo - Résultats : Perdu ! Le nombre à deviner était $nbOrdinateur.\n");
            echo PHP_EOL;
        }

    } elseif ($menu == 2) {  //lorsque l'utilisateur appuie sur 2 le programme renvoie les données du fichier texte resulat.txt
        readfile("resultats.txt");
        echo PHP_EOL;

    } elseif ($menu == 3) {  //lorsque l'utilisateur appuie sur 2 le programme renvoie les données du fichier texte resulat.txt losque le jour correspond à celui préciser par l'utilisateur
        $dateCherchee= readline("Saisir une date (format d/m/Y) : ");
        while (($ligneDate=fgets($fichier))!=false) {
            if (substr_count($ligneDate,$dateCherchee)) {
                echo PHP_EOL;
                echo "$ligneDate";
            }
        }
    } elseif ($menu == 4) {  //lorsque l'utilisateur appuie sur 2 le programme renvoie les données du fichier texte resulat.txt losque le pseudo du joueur correspond à celui préciser par l'utilisateur
        $pseudoCherchee = readline("Saisir un pseudo : ");
        while (($lignePseudo = fgets($fichier)) != false) {
            if (substr_count($lignePseudo, $pseudoCherchee)) {
                echo PHP_EOL;
                echo "$lignePseudo";
            }
        }
    } elseif ($menu == 5) {
        $x=1;  //le programme ne rentre plus dans la boucle while car x n'est plus égal à 0
        die();  //le programme s'arrête
    }
}


