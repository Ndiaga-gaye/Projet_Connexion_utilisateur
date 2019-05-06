<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="connexion.css" type="text/css" media="all">
        <title>Connexion Utilisateurs</title>
    </head>
    <body>
       
        <div id="conn" style="border: 2px solid aqua; width:40%; height:250px;">
            <form  method="post" action="Traitement.php">
                <h4>Connexion des utilisateurs</h4>
                <span>
                   <div align="center">
                        <input id="user" type="text" name="user" placeholder="Entrer votre login"/> <br>
                        <input id="pseudo" type="password" name="pseudo" placeholder="Entrer Mot de passe"/> <br>
                        <input class="button" type="submit" value="Se Connecter"/>
        
                    </div>
                </span>
            </form>
        </div>
    </body>
</html>