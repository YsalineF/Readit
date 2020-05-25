<?php
/*
  ./app/modeles/postsModele.php
*/
namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT id
                 title,
                 resume,
                 image,
                 DAYOFMONTH(created_at) AS jour,
                 MONTH(created_at) AS mois,
                 YEAR(created_at) AS annee
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
