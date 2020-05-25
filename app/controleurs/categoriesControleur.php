<?php
/*
  ./app/controleurs/categoriesControleur.php
*/
namespace App\Controleurs\Categories;
use \App\Modeles\Categories;

// Affichage du menu des categories
function indexAction(\PDO $connexion) {
  // 1. On demande les catégories au modèle et on les met dans $categories
  include_once '../app/modeles/categoriesModele.php';
  $categories = Categories\findAll($connexion);

  include '../app/vues/categories/categoriesList.php';
}
