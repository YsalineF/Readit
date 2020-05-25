<?php
/*
  ../app/routeur.php
  ROUTEUR PRINCIPAL
*/

// ROUTE PAR DEFAUT: Liste des posts (les 10 derniers)
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\Posts\indexAction($connexion);
  endif;
