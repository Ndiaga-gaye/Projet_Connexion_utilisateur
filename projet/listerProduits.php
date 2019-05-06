<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        .t tr:nth-child(even){
            background-color:   rgb(50, 205, 184);;
        }
        </style>
         <link rel="stylesheet" href="munu.css">
    </head>
    <body>
    
   <nav>
             <div>
             <ul>
                    <li class=ac-php><a href="Accueil.php">Accueil</a></li>
                    <li class=ac-php1 ><a href="listerProduits.php">Liste produits</a></li>
                    <li class=ac-php2><a href="rechercherProduits.php"> Recherch produits</a></li>
                    <li class=ac-php4><a href="ajouterProduit.php"> Ajout  produits</a></li>
                    <li class=ac-php3><a href="updateProduit.php">Update Produits</a></li>
                    
                </ul>
            </div>
   </nav>

   <form method="POST" action="">
<input type="text" name="text" placeholder="Ce que vous voulez supprimer ?">
<input type="submit" name="Envoyer" value="Supprimer">
 </form>
<div class="espace">
    <p id="p"> TABLEAUX DES PRODUITS</p>
</div>
   

<?php

$produits = array (
array('Acétone',1200,20,1200*20 ),
array('Acide Chlorhydrique',2000,8,2000*8  ),
array('Chlorure daluminium',2500,25,2500*25 ),
array('Chlorure de calcuim',2500,7,2500*7 ),
array('Chlorure de sodium',3000,30,3000*30 ),
array('Cuivre en poudre',1500,6,1500*6 ),
array('Dioxygéne',1000,40,1000*40),
array('Fil de cuivre',1500,4,1500*4),
array('Hydroxyde de sodium',2000,35,2000*35),
array('limaille de fer',1000,2,1000*2),
array('Permanganate de potassium',2000,25,2000*25),
array('Suffate de cuivre',3000,3,3000*3 ),
array('grenaille de Zinc',1500,15,1500*15),
array('Zinc en poudre',1000,5,1000*5),
array('Sulfate de Zinc',2000,10,2000*10),
);

echo '<table border=1 width=100% height=100% class="t">';
echo '<tr> <th> NOM</th>' ;
echo '<th> PRIX UNITAIRE </th>';
echo  '<th> QUANTITES </th>';
echo    '<th> MONTANTS</th>';

echo '</tr>';
$sup=$_POST["text"];
  for($i=0;$i<count($produits);$i++){
if($sup==$produits[$i][0]){
unset ($produits[$i]);
   }
}                                                                                                                     for($ligne=0; $ligne <14; $ligne++){
  echo '<tr>';
  for($col=0; $col<4; $col++){
       echo '<td>' .$produits[$ligne][$col]. '</td>';
       }
 echo '</tr>';
 }
 echo '</table>';

?>

    </body>
</html>
