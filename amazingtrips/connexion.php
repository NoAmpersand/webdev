<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="stylesheet.css">
<link rel="icon" type="image/jpeg" sizes="16x16" href="logovoyage.jpeg">
<title>Accueil</title>

<body>
	<?php
include('header.php');
?>

<div class="content">
			<form name="Connexion" class="formul" id="connecter" onsubmit="return connection()" action="connexioncheck.php" method="POST">
                <div class="input-box">
                    <span class="details"><label for="mail">Adresse Mail</label></span>
                    <input type="text" name="mail" id="mail"><span class="error" id="er"></span>
                </div>
                <div class="input-box">
                    <span class="details"><label for="motdepasse">Mot de passe</label></span>
                    <input type="password" name="motdepasse" id="motdepasse"><span class="error" id="err"></span>
                </div>
                <div>
				    <input type="checkbox" onclick="montrer()">Montrer le mot de passe
                    <!-- appel à la fonction javascript montrer() pour montrer ou cacher le mot de passe-->
                </div><br>
				<div class="input-submit">
                   <input type="submit" value="Valider">
                </div>
			</form>
        </div>

        <?php
include('footer.php');
?>