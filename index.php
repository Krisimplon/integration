<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<title>Integration</title>
</head>
<body>
	<h1>Airbnb
</h1>
<div>
<h2>Réservez des logements </h2>
<h2>uniques et vivez là-bas</h2>
<h2>comme des locaux.</h2>
</div>
<div id="tfheader">
	<form id="tfnewsearch" method="get" action="https://www.airbnb.fr">
		<input type="text" class="tf text input" name="q" placeholder="Essayez ‹‹Sicile››" size="50" maxlength="120"
		height="50">
		<input type="submit" value="Rechercher" class="tfbutton">
	</form>
	<div class="tfclear">
	</div>
</div>

<?php
$heure = date("H:i");
Print("$heure");
?> <br>

	<div>
<h3 id="h3kris">Explorer Airbnb</h3>
	</div>

<div>
<div class="bouttons1">
	<div>
	<img src="images.kris/logements-general.jpg" alt="Ne peut s'afficher" class="fotobouttons">
	</div>
	<div>
		<p class="titrebouttons">Logements</p>
	</div>
</div>	

<div class="bouttons2">
	<div>
	<img src="images.kris/experiences-general.jpg" alt="Ne peut s'afficher" class="fotobouttons">
	</div>
	<div>
	<p class="titrebouttons">Expériences</p>
	</div>
</div>

<div class="bouttons3">
	<div>
	<img src="images.kris/restaurants-general.jpg" alt="Ne peut s'afficher" class="fotobouttons">
	</div>
	<div>
	<p class="titrebouttons">Restaurants</p>
	</div>
</div>
</div>

 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ?>

	<div class="slide_experiences">
		<div><h3 class="titre_slide_tables">Expériences</h3></div><div class="plus">Plus</div>
			<?php
		 $db = mysqli_connect('localhost','root','simplon8','Airbnb')
    or die('Error connecting to MySQL server.');
 
    $query = "SELECT * FROM VILLES";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)) {
    	echo '<div class="image_text">';
    	echo '<div><img class="image1_slide_tables" src="https://picsum.photos/246/164"/></div>';
    	echo '<div class="text_image12"><p><b>VIE NOCTURNE · '.$row['nom-ville'].'</b></p></div>';
    	echo '<div class="text_image2"><b>Photo session on the Brooklyn Bridge</b></div>';
		echo '<div class="text_image3">87€ par personne</div>';
		echo '</div>';

	}
    ?>
    </div>

	<div class="slide_tables">
		<div><h3 class="titre_slide_tables">Tables très prisées à travers le monde</h3></div><div class="plus">Plus ></div>
	</div>
<div class="text_image_global">
	<div class="image_text">
		<div><img class="image1_slide_tables" src="https://picsum.photos/194/129"/></div>
		<div class="text_image"><p><b>GASTROPUB COREEN</b></p></div>
		<div class="text_image2"><b>Hajan</b></div>
		<div class="text_image3">Environ 42€ par personne</div>
	</div>
	<div class="image_text">
		<div><img class="image1_slide_tables" src="https://picsum.photos/194/129"/></div>
		<div class="text_image4"><p><b>BAR SPEAKEASY</b></p></div>
		<div class="text_image2"><b>Chumley's</b></div>
		<div class="text_image3">Environ 51€ par personne</div>
	</div>
	<div class="image_text">
		<div><img class="image1_slide_tables" src="https://picsum.photos/194/129"/></div>
		<div class="text_image4"><p><b>ALLEMAND, AMERICAIN</b></p></div>
		<div class="text_image2"><b>Prime Meats</b></div>
		<div class="text_image3">Environ 51€ par personne</div>
	</div>
	<div class="image_text">
		<div><img class="image1_slide_tables" src="https://picsum.photos/194/129"/></div>
		<div class="text_image5"><p><b>FRUITS DE MER</b></p></div>
		<div class="text_image2"><b>Seaspice</b></div>
		<div class="text_image3">Environ 59€ par personne</div>
	</div>
	<div class="image_text">
		<div><img class="image1_slide_tables" src="https://picsum.photos/194/129"/></div>
		<div class="text_image4"><p><b>PIZZERIA ITALIENNE</b></p></div>
		<div class="text_image2"><b>Osteria Cotta</b></div>
		<div class="text_image3">Environ 38€ par personne</div>
	</div>
</div>
	<div class="slide_destinations">
		<div><h3 class="titre_slide_tables">Destinations à la une</h3></div>
	</div>
<div class="text_image_global2">
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image6"><b>Miami</b></div>
	</div>
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image7"><b>Paris</b></div>
	</div>
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image8"><b>Le Cap</b></div>
	</div>
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image9"><b>Séoul</b></div>
	</div>
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image10"><b>Tokyo</b></div>
	</div>
	<div class="text_image_global6">
		<div><img class="image1_slide_destinations" src="https://picsum.photos/159/238"/></div>
		<div class="text_image11"><b>Londres</b></div>
	</div>
</div>
<footer>
		<div id="blocselect">
	<div>
	<select class="select">
  <option value="valeur1" selected="valeur1">Français</option> 
  <option value="valeur2" >Deutsh</option>
  <option value="valeur3">English</option>
</select>
	</div>
	<div>
	<select class="select">
  <option value="valeur4" selected="valeur4">Euro</option> 
  <option value="valeur5" >Dollar Américain</option>
  <option value="valeur6">Livre Sterling</option>
</select>
	</div>
	</div>
	
	<div>
	<div id="bloc1textfooter">
			<p class="titresfooter">Airbnb</p><br>
			A propos d'Airbnb<br>
			Carrières<br>
			Presse<br>
			Règles<br>
			Aide<br>
			Diversité et intégration <br>	
	</div>

	<div id="bloc2textfooter">
			<p class="titresfooter">Découvrir</p><br>
			Confiance et sécurité<br>
			Crédit voyage<br>
			Airbnb Citizen<br>
			Voyage d'affaires<br>
			Guides<br>
			Airbnbmag <br>
	</div>

	<div id="bloc3textfooter">
			<p class="titresfooter">Hébergement</p><br>
			Pourquoi être hôte<br>
			Hospitalité<br>
			Hébergement responsable<br>
			Community Center <br>
	</div>
	<br>
	<br>
<hr>
	<div>
	<div class="pieddepage">© Airbnb, Inc.</div>

	<span class="pieddepage">Conditions Politique de Confidentialité Plan du site</span>
	</div>
</footer>
</html>