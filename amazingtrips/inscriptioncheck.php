<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	

</head>
<body>



 <?php

   
    $name = $_POST['name_user'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $mail = $_POST['email'];

    // teste si les champs obligatoire sont remplit
    if(empty($name))
    {
      echo"Veuillez indiquer votre prénom svp !";
    }
      
      elseif(empty($password))
    {
      echo "Veuillez indiquer votre mot de passe svp!";

    }

     elseif(empty($lastname))
    {
      echo "Veuillez indiquer votre nom svp !";

    }

     elseif(empty($mail))
    {
      echo "Veuillez indiquer votre email svp!";

    }


else {
  echo " Merci " . $name . ", votre demande d'isncription a bien été prise en compte.";
}


?>

</body>
</html>

