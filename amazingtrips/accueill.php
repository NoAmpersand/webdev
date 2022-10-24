<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="accueill.css">
<link rel="icon" type="image/jpeg" sizes="16x16" href="logovoyage.jpeg">
<title>Accueil</title>

<body>
	<?php
include('header.php');?>
<br><?php
date_default_timezone_set('UTC'); 
echo date('l jS \of F Y h:i A');  ?>

	<p id="titre0bis"> Bienvenue chez AmazingTrips !</p><br>
	<p id="titre0">Votre plus beau voyage commence ici !</p>
	<table>
		<tr><td>
	<img src="beaupaysage.jpeg" alt="beau paysage" width="500" height="300">
</td>
<td>
	<h2 id="petittitre"> Nos vacances de rêve soigneusement sélectionnées</h2> <br>
<p id="paragraphe">Et pourquoi ne pas réserver un voyage au long court qui vous semblait inaccessible ? Si les plages des Maldives sont les plus réputées, pourquoi ne pas tenter d'aller encore plus loin en nageant avec les requins dans les atolls de Tahiti ? Le rêve est différent pour chacun de nous, les paysages incroyables de la Corse font eux aussi partie de ce domaine.  </p>
</td>
</tr>
</table>
	<div id="Nos voyages"> <p id="titre">Nos voyages</div> </p>

<dl>
<dt>
<table>
<tr><th colspan="2"><a href="AT_Corse.php"><img src="corse.webp"alt="impossible de télécharger l'image" width="400px" height="200px"></a></th></tr>
<tr><th colspan="2"><a href="AT_Corse.php"><h2 align="center">CORSE</h2></a></th></tr>
<tr>
<td>Vol + hôtel </td>
<td><h3>160€</h3></td>
</tr>
</table>
</dt>
</dl>

<?php
include('footer.php');
?>

</body>
</ul>
</div>
</body>
</html>
