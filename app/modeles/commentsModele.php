<?php
/*
  ./app/modeles/commentsModele.php
*/
namespace App\Modeles\Comments;

//Fonction qui permet d'afficher les commentaires de chaque post en fonction de l'id du post
function indexByPostId(\PDO $connexion, int $id) {
  $sql = "SELECT pseudo,
                  content,
                  DATE_FORMAT(created_at, '%M %d, %Y') AS createdAt,
                  DATE_FORMAT(created_at, '%l:%i%p') AS timeHour
          FROM comments
          WHERE post_id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

// Fonction qui permet d'afficher le nombre de commentaires pour chaque post
function nbrComments(\PDO $connexion, $id) {
  $sql = "SELECT COUNT(id) AS nbrComments
          FROM comments
          WHERE post_id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
