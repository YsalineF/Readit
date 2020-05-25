<?php
/*
  ./app/modeles/authorsModele.php
*/
namespace App\Modeles\Authors;

// Fonction qui permet d'afficher les informations d'un auteur en fonction de l'id du post
function show(\PDO $connexion, $id) {
  $sql = "SELECT lastname,
                  firstname,
                  biography,
                  image
          FROM authors
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
