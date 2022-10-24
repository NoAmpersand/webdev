<?php
//définition des variables correspondant aux données de l'utilisateur
//lors des appels à ces variables, on utilisera les superglobales $GLOBALS

include ('idconnect.php'); //fichier contenant les identifiants pour accéder à notre base de données
$idcon= new mysqli ($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['mdpasse'], $GLOBALS['bdd'], $GLOBALS['port']); #connexion à la bdd

$mail=$_SESSION['mail'];
$sql="SELECT * from user WHERE email='$mail'"; //requete sql pour obtenir toutes les données de l'utilisateur connecté
if($result=$idcon->query($sql)){    //condition : la modification est effectuée avec succès
    while($data=$result->fetch_assoc()){    //on stocke chaque donnée dans une variable
        $id=$data['id_user'];
        $name=$data['name_user'];
        $lastname=$data['lastname'];
        $birthdate=$data['birthdate'];
        $mail=$data['email'];
        $pwd=$data['password']; 
    }
    $age=(date_diff(date_create($naissance),date_create(date("Y-m-d"))))->format("%y"); //calcul de l'age grâce à la date de naisssance
}
?>