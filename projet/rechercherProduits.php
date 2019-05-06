


<!DOCTYPE html>
<html>
    <head>
        <style>
        .t tr:nth-child(even){
            background-color:   rgb(50, 205, 184);
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



<input type="text" name="text1" id='text1' placeholder="Prix_MIN" >
<input type="text" name="text2" id='text2' placeholder="Prix_MAX" >
<input type="text" name="text3" id='text3' placeholder="valeur_Qté" >
<input type="text" name="text4" id='text4' placeholder="Nom" >
<input type="submit" name="Rechercher" value="Rechercher">

</form>


<?php

$produits = array (
    array('Acétone','1200','60','72000'),
    array('Acide Chlorhydrique','2000','40','80000 '),
    array('Chlorure daluminium','2500','30','75000 '),
    array('Chlorure de calcuim','2500','70','175000 '),
    array('Chlorure de sodium','3000','100','300000 '),
    array('Cuivre en poudre','1500','60',' 90000'),
    array('Dioxygéne','1000','100','100000 '),
    array('Fil de cuivre','1500','40','60000'),
    array('Hydroxyde de sodium','2000','90',' 180000'),
    array('limaille de fer','1000','20','20000 '),
    array('Permanganate de potassium','2000','25',' 50000'),
    array('Suffate de cuivre','3000','80',' 240000'),
    array('grenaille de Zinc','1500','15','22500 '),
    array('Zinc en poudre','1000','55',' 55000'),
    array('Sulfate de Zinc','2000','10','20000 '),
    );
    
    echo '<table border=1 width=80% height=100% >';
    echo '<tr> <th> nom </th>' ;
    echo '<th> prix unitaire </th>';
    echo  '<th> quantités </th>';
    echo    '<th> montants </th>';
   
    echo '</tr>';

    for($ligne=0; $ligne <14; $ligne++){
        echo '<tr>';
        for($col=0; $col<4; $col++){
            echo '<td>' .$produits[$ligne][$col]. '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';


  //  isset($_POST['Rechercher'])

  
  $qte=$_POST['text1'];
  $qte2=$_POST['text2'];
  $qte3=$_POST['text3'];
  $qte4=$_POST['text4'];

  if($qte2!=0 && $qte!=0){

    if ($qte2>$qte){
        for($lig=0; $lig<14; $lig++){
            echo '<br>';
        if ($qte2>$produits[$lig][1] && $produits[$lig][1]>$qte){
            for($col=0;$col<4;$col++){
                echo $produits[$lig][$col], '  ';
                echo '<table border=1 width=60% height=100%>';
                
                
            }    
        }
        
        if ($qte2<$qte) {
            echo 'Veillez respecter les instructions fixées' ;
        }
    }
} 
}

else  if($qte=$_POST['text1']){
   

    for($lig=0; $lig<14; $lig++){
        echo '<br>';
        if($qte<$produits[$lig][1]){
            for($col=0;$col<4;$col++){
                echo $produits[$lig][$col], '  ';
                echo '<table border=1 width=60% height=100%>';
            }
        }
    }
 }
 
 if($qte2=$_POST['text2']){
        
 
  for($lig=0; $lig<14; $lig++){
            echo '<br>';
 
     if ($qte2>$produits[$lig][1]){
 
    for($col=0;$col<4;$col++){
          echo $produits[$lig][$col], '  ';
          echo '<table border=1 width=60% height=100%>';
            }
        }
   
    }
}   
 
 







 
 if($qte3=$_POST['text3']){
        
 
  for($lig=0; $lig<14; $lig++){
            echo '<br>';
 
     if ($qte3==$produits[$lig][2]){
 
    for($col=0;$col<4;$col++){
          echo $produits[$lig][$col], '  ';
          echo '<table border=1 width=60% height=100%>';
            }
        }
   
    }
}   

if($qte4=$_POST['text4']){
        
 
    for($lig=0; $lig<14; $lig++){
              echo '<br>';
   
       if ($qte4==$produits[$lig][0]){
   
      for($col=0;$col<4;$col++){
            echo $produits[$lig][$col], '  ';
            echo '<table border=1 width=60% height=100%>';
              }
          }
     
      }
  }   
?>

</body>
</html>
