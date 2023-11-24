<?php

// Connexion au serveur

try {

  $dns = 'mysql:host=localhost;dbname=testboucard'; // dbname : nom de la base

  $utilisateur = 'root'; // root sur vos postes

  $motDePasse = ''; // pas de mot de passe sur vos postes

  $connect = new PDO( $dns, $utilisateur, $motDePasse );

  echo "Connexion à MySQL OK.";

} catch (Exception $e) {

  echo "Connexion à MySQL impossible : ", $e->getMessage();

  die();

}

?>