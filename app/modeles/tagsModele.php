<?php
/*
  ./app/modeles/tagsModele.php
*/
namespace App\Modeles\Tags;

// Fonction qui permet de trouver les tags d'un post en fonction de l'id de ce dernier (le post)
function indexByPostId(\PDO $connexion, int $id) {
  $sql = "SELECT name
          FROM tags t
          JOIN posts_has_tags pht ON pht.tag_id = t.id
          WHERE pht.post_id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
