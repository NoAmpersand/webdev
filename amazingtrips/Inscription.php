<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title> Insription</title>
	<link rel=“stylesheet” href=“stylesheet.css”>

</head>


<body>

	<p id="titre">Inscription</p>

<fieldset>

<table >

	<form name ="Inscription" action="inscriptioncheck.php" method="POST">



	

	<tr><td>Saisir votre nom*<br>
		<input type="text" name="lastname"></td></tr>


	<tr><td>Saisir votre prénom*<br>
		<input type="text" name="name"></td></tr>

	<tr><td>Date de naissance<br>
           <input type="date" min="1900-01-01" max="2010-01-01" name="birthdate" value="birthdate"><br>
                    <!--la date de naissance doit être postérieure au 01/01/1900 et antérieure au 01/01/2010-->
                </td></tr>

	


	<tr><td>Adresse email*<br>
		<input type="text" name="email" placeholder="exemple.@gmail.com"></td></tr>

	<tr><td>Veuillez créer un mot de passe*<br>
		<input type="password" name="password" maxlength="15"></td></tr>

</table>

	<p> Les champs suivi d'un * sont obligatoire</p>



	<p align="center"><input type="submit" value="Valider inscription" id="bouton"></p> 


</form>

</table>
</fieldset>

</body>
</html>