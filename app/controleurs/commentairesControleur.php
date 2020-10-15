<?php
/*
    ./app/controleurs/commentairesControleurs.php
*/

namespace App\Controleurs\CommentairesControleur;
use \App\Modeles\CommentairesModele;

function indexAction(\PDO $connexion) {
  // Demander la lise des commentaires au modele
  include_once '../app/modeles/commentairesModele.php';
  $commentaires = CommentairesModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content;
  ob_start();
    include '../app/vues/commentaires/index.php';
  $content = ob_get_clean();
}
