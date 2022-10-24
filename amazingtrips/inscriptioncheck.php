<?php
session_start();
include ('idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données 
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd


    // teste si les champs obligatoire sont remplis
    if(empty($lastname))
    {
      echo "Veuillez indiquer votre nom svp !";

    }
    
    else if(empty($name))
    {
      echo"Veuillez indiquer votre prénom svp !";
    }
      
      else if(empty($password))
    {
      echo "Veuillez indiquer votre mot de passe svp!";

    }

     else if(empty($mail))
    {
      echo "Veuillez indiquer votre email svp!";

    }

    $name= strtolower($_POST["name"]); 
	$lastname =strtolower($_POST["lastname"]);
	$mail= strtolower($_POST["email"]); 
	$pwd= $_POST["password"]; 
	$birthdate= $_POST["birthdate"]; 

    $sql = " INSERT INTO user (name_user, lastname, birthdate, email, passsword) VALUES ('$name', '$lastname', '$birthdate', '$mail', '$pwd')"; //requête SQL pour insérer un enregistrement à la table user
	if ($idcon->query($sql)){ //condition : l'enregistrement est effectué avec succès
		$lastname=strtoupper($lastname[0]).substr($lastname,1,strlen($lastname));  
    	$name=strtoupper($name[0]).substr($name,1,strlen($name));
		echo " Merci " . $name . ", votre demande d'inscription a bien été prise en compte.";
	} 
	else {
		echo " Désolée " . $name . ", votre demande d'inscription n'a pas pu être prise en compte.";
	}  

?>
