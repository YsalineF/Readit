<?php
/*
  ../app/routeur.php
  ROUTEUR PRINCIPAL
*/

// ROUTE DU DETAIL D'UN POST
// PATTERN: /?postID=x
// CTRL: postsControleur
// ACTION: show
if(isset($_GET['postID'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);

// ROUTE PAR DEFAUT: Liste des posts (les 10 derniers)
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\Posts\indexAction($connexion);
  endif;
