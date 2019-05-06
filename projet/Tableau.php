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
echo '<table border=1 width=80% height=100%>';
echo '<tr> <th> nom </th>' ;
echo '<th> login </th>';
echo  '<th> mot de passe </th>';
echo '</tr>';

for($ligne=0; $ligne <10; $ligne++){
    echo '<tr>';
    for($col=0; $col<3; $col++){
        echo '<td>' .$utilisateur[$ligne][$col]. '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>