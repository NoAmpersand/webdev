<?php
session_start();

require 'bdd.php';

$username = $_POST['name_user'];
$password = $_POST['password'];
$objectPdo = new PDO("mysql:host=localhost;dbname=Projet",'root','root');

if(!empty($username) && !empty($password) && !is_numeric($username)){
  $query = $objectPdo
  $queryPrep = $objectPdo->prepare('SELECT * FROM USER WHERE name_user = $username');
  $loginIsOk = $pdoStat->execute();

  if($loginIsOk && ($queryPrep -> rowCount() > 0)) {
   $data = $queryPrep->fetch(PDO::FETCH_ASSOC);
    if($data['password'] == $password){
        $_SESSION['id_user'] = $data['id_user'];

        header("Location : accueill.php");
        die;
    }
  }
}



?>
