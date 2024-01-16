<?php

// Définir les informations de connexion
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
const DB_PASSWORD = "";

// Utiliser PDO pour créer une connexion à la DB (base de données)
$connexion = new PDO(dsn:"mysql:host=".DB_HOST.";dbname=".DB_NAME,username:DB_USER,password:DB_PASSWORD);

// refractoring : améliorer le code sans en changer le fonctionnement