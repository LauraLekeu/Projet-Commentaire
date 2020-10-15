<?php
/*

    ./app/routeur.php

*/

// ROUTE PAR DEFAUT
// PATTERN: /
// CRTL: commentairesControleur
// ACTION: index
include_once '../app/controleurs/commentairesControleur.php';
 \App\Controleurs\commentairesControleur\indexAction($connexion);
