<?php 
// inclure un fichier 
include "confg.php";
//appel fonction 
$base = connect() ; 
$req = "SELECT * from users";

//query tekhdem ken maa SELECT
$result = $base->query($req);
//fetchObject tekhou el resultat o trod'ha objet o mbaaed tabaaathha lel user o l user tousolou sous forma d'un object fetchAssoc
while($user = $result->fetchObject()){
    echo $user->email." ".$user->password ; 

}

?>