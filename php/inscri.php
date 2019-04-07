<?php
// inclure un fichier 
include "confg.php";
//appel fonction 
$base = connect() ; 


//recupération des donnes 
$e = $_REQUEST['email'];
$m = $_REQUEST['mdp'];
$mdpc = md5($m);
$req = "INSERT INTO users ( id, email, password ) VALUES (null,'$e','$mdpc')";

//exec INSERT , UPDATE , DELETE 
// type de retour mtaa l'exec trajaalek ye entier ye boolean 
// int fyh el nom mtaa les lignes eli inyret'hom 
// trajaa int idha el reqet saret bel s'hyh o trajaalek boolean feha el valeur false en cas d'echec 
$resp = $base->exec($req);
if ($resp == 1){
    echo "donnes inserer w jawek beehy";
}else {
     echo "bara thabet fel req ouala fel fichier config";}