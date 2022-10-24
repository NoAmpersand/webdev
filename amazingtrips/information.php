<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="stylesheet.css">
    </head>    
    <header>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpeg" sizes="16x16" href="logovoyage.jpeg">
	<table id="tablo1">
	<tr><td><img src="logovoyage.jpeg" alt="Logo site" width="100" height="100"></td>
		
		<nav><td align="right" id="tablo"><span class="button"> <a href="accueill.php" class="menu">Accueil </a>  </span> &emsp;&ensp;  <span class="button"> <a href="#Nos voyages" class="menu">Nos voyages </a> </span>  &emsp;&ensp; <span class="button"><a href="connexion.php" class="menu">Connexion </a></span>&emsp;&ensp; <span class="button"><a href="Inscription.php" class="menu">Inscription </a></span>&emsp;&ensp;</td></nav>
	</tr>
</table>
</header>
<body>
<p>
<?php            
			$servername = 'localhost';
            $username = 'root';
            $password = '';
            $nom = 'repertoire';
            
            //On établit la connexion
            $mysqli = new mysqli($servername, $username, $password,$nom);
            
            //On vérifie la connexion
            if($mysqli->connect_error){
                die('Erreur : ' .$mysqli->connect_error);
            }

            echo'<h1>Liste possible de voyage dans les villes</h1>';

            echo '<div class="informations"><main><table>

    	<thead>
        	<tr>
            	<th>Ville</th>
            	<th>Nombre habitant</th>
            	<th>Pays</th>            
        	</tr>
    	</thead>
    	<tbody>';
        $taille = $mysqli->query('SELECT COUNT(nomVille) AS totalVille FROM ville');
        $taille = $taille->fetch_row()[0];
        for($i = 0;$i < (int) $taille; $i++ ){
            $nomVille = $mysqli->query('SELECT nomVille FROM ville WHERE id ='.$i);
            $nomVille = $nomVille->fetch_row()[0];
            $nbHabitants = $mysqli->query('SELECT nbHabitants FROM ville WHERE id = '. $i);
            $nbHabitants = $nbHabitants->fetch_row()[0];
            $nomPays = $mysqli->query('SELECT nomPays FROM ville WHERE id = '.$i);
            $nomPays = $nomPays->fetch_row()[0];
      		echo '<tr><td>'.$nomVille.'</td>';
        	echo '<td>'.$nbHabitants.'</td>';
        	echo '<td>'.$nomPays.'</td></tr>';
		    echo'</tr>';
        }
        echo'
    	</tbody>
	  	</table>
        </main>
        </div>';
            
?>
</p>
</body>
<footer id="footer">
	<p>© 2022 AmazingTrips, Inc. Tous droits réservés</p>
</footer>
</html>