<?php
/*
  ./app/modeles/categoriesModele.php
*/
namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY id ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
