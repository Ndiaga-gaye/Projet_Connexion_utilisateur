<?php

$utilisateur = array (
array('mouhamed','mouha10','102017'),
array('bamba','bamba20','202017'),
array('lamine','lamine30','302017'),
array('mounas','mounas40','402017'),
array('amadou','amadou50','102017'),
array('alioune','aliou60','102017'),
array('babacar','babs70','102017'),
array('youssou','you80','102017'),
array('birame','birame90','102017'),
array('malick','malick10','102017'),
);

$user = $_POST['user'];
$pseudo = $_POST['pseudo'];

if( isset($user) && isset($pseudo)){
    for($ligne=0; $ligne <10; $ligne++){
       if($user == $utilisateur[$ligne][1] && $pseudo == $utilisateur[$ligne][2]){
           header('location: Accueil.php');
           break;
       }else{
        header('location: authentification.php');
       }
    }
}
?>
