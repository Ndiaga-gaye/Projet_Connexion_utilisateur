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
   <div id="conn">
            <form action="" method="POST">
        
            <h4 class=F> champ de  saisie pour ajouter des produits</h4>
            <p>
               <label for="nom">nom Produit</label>
               <input type="text" name="nom" id="nom">
            </p>
            <p>
               <label for="prix"> Prix unitaire  </label>
               <input type="text" name="prix" id="prix">
            </p>
            <p>
               <label for="pseudo"> Quantités  </label>
               <input type="text" name="Quantité" id="Quantité">
            </p>
            <input type="submit" value="AJOUTER" name="AJOUTER">
         
            </form>
        </div> 
        <?php
  
       
       
?>



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
    if(isset($_POST["AJOUTER"])){
        array_push($produits,array($_POST["nom"],$_POST["prix"],$_POST["Quantité"],($_POST["prix"]*$_POST["Quantité"]) ));
    }
    

    echo '<table border=1 width=100% height=100% class="t">';
    echo '<tr> <th> NOM</th>' ;
    echo '<th> PRIX UNITAIRE </th>';
    echo  '<th> QUANTITES </th>';
    echo    '<th> MONTANTS</th>';

    echo '</tr>';



for($ligne=0; $ligne <count($produits); $ligne++){
    echo '<tr>';
    for($col=0; $col<count($produits[$ligne]); $col++){
        echo '<td>' .$produits[$ligne][$col]. '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

    </body>
</html>
