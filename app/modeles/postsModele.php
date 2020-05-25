<?php
/*
  ./app/modeles/postsModele.php
*/
namespace App\Modeles\Posts;

// Fonction qui permet d'afficher tous les posts
function findAll(\PDO $connexion) {
  $sql = "SELECT *,
                 DAYOFMONTH(created_at) AS jour,
                 DATE_FORMAT(created_at, '%M') AS mois,
                 YEAR(created_at) AS annee
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

// Fonction qui permet de trouver un post en fonction de son id
function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT title,
                  image,
                  content,
                  author_id
          FROM posts
          WHERE id=:id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
