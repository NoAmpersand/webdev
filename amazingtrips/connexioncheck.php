<?php
session_start();

require 'idconnect.php';

$username = $_POST['name_user'];
$password = $_POST['password'];
$objectPdo = new PDO("mysql:host=$host;dbname=$bdd",$user,$mdpasse);

if(!empty($username) && !empty($password) && !is_numeric($username)){
  $queryPrep = $objectPdo->prepare('SELECT * FROM USER WHERE name_user = $username');
  $loginIsOk = $queryPrep->execute();


  if($loginIsOk && ($queryPrep -> rowCount() > 0)){
    $data = $queryPrep->fetch(PDO::FETCH_ASSOC);
    if($data['password'] == $password){
        $_SESSION['id_user'] = $data['id_user'];

        header("Location : accueill.php");
        die;
    }
  }
    	echo "Mauvais nom d'utilisateur ou mot de passe";}
    else{
    	echo "Veuillez entrer des informations cohérentes";
    }
?>
