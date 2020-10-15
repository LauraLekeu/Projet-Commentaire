<?php
/*
    ./app/modeles/commentairesModele.php
*/

namespace App\Modeles\CommentairesModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM commentaires
          ORDER BY id ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
