<!doctype HTML>
<meta charset="utf-8">
<link rel="stylesheet" href="base.css" />
<html lang="fr">
<head>
	<title> Estimation de votre bien </title>
</head>
<body>
	<nav id='cssmenu'>
		<ul>
			<li class='active'><a href='index.html' ><span>Accueil</span></a></li>
			<li><a href='Méthodes.html'><span>Nos méthodes</span></a></li>
			<li><a href='Estimation.php'><span>Estimation du bien immobilier</span></a></li>
			<li class='last'><a href='Contact.html'><span>Contactez Nous</span></a></li>
		</ul>
	</nav>
	
	<form method="post">
		<br>
		<div id="my-menu">
			<!-- Le label -->
			<label for="toggle-block">Informations générales (obligatoire)</label> 
			<!-- La checkbox que je choisis cochée au démarrage -->
			<input id="toggle-block" name="toggle-block" type="checkbox" checked />  
			<!-- Le bloc à afficher -->
			<div id="my-block">
				<label>Code postal</label> : <input type="number" name="CodeP" />
				<br>
				<label>Ville</label> : <input type="text" name="Ville" />
				<br>
				<label>Adresse</label> : <input type="text" name="Adresse" />
				<br>
				<label for="typeB">Quel est le type de bien ?</label>
				<select name="typeB" id="typeB">
					<option value="Maison">Maison</option>
					<option value="Appartement" >Appartement</option>
					<option value="Duplex">Duplex</option>
					<option value="Triplex">Triplex</option>
					<option value="Loft/Atelier">Loft/Atelier</option>
					<option value="Hotel">Hotel</option>
				</select>
				<br>
				<label>Combien de m² ? </label> : <input type="number" name="Taille"/>
				<br> 
				<label>Nombre de pièces ? </label> : <input type="number" name="NbP"/>
				<br> 
				<label>Nombre de salle de bain ? </label> : <input type="number" name="NbS" />
				

			</div>
		</div>
		<br><br>
		<div id="my-menu">
			<!-- Le label -->
			<label for="toggle-block">Travaux</label> 
			<!-- La checkbox que je choisis cochée au démarrage -->
			<input id="toggle-block" name="toggle-block" type="checkbox" />  
			<!-- Le bloc à afficher -->
			<div id="my-block">
				
				<label>Etat du bien</label> : <input type="range" name="EdB" />
				<br>     	
				<label>Etat de la copropriété </label> : <input type="range" name="EdC" />
				<br>
				<label>Etat des murs </label> : <input type="range" name="EdM" />
				<br>
				<label>Etat electricité/plomberie </label> : <input type="range" name="EEP" />
				<br>
				<label>Etat isolement </label> : <input type="range" name="EI" />

			</div>
		</div>
		<br><br>
		<div id="my-menu">
			<!-- Le label -->
			<label for="toggle-block">Environnement du bien</label> 
			<!-- La checkbox que je choisis cochée au démarrage -->
			<input id="toggle-block" name="toggle-block" type="checkbox" />  
			<!-- Le bloc à afficher -->
			<div id="my-block">
				
				Luminosité : <input name="Lum" type="range" />
				<br>
				Nuisance sonore : <input name="Son" type="range" />
				<br>
				Population : <input name="Pop" type="range" />
				<br>
				Proximité des transports : <input name="ProxTrans" type="range" />
				<br>
				Proximité des ecoles : <input name="ProxEcole" type="range" />
				<br>
				Proximité des commerces : <input name="ProxCom" type="range" />
				<br>
				Orientation du bien :
				<select name="Orient">
					<option value="Est">Est</option>
					<option value="Sud-Est" >Sud-Est</option>
					<option value="Sud" >Sud</option>
					<option value="Sud-Ouest" >Sud-Ouest</option>
					<option value="Ouest">Ouest</option>
					<option value="Nord-Ouest">Nord-Ouest</option>
					<option value="Nord">Nord</option>
					<option value="Nord-Est">Nord-Est</option>
				</select>
				<br>
				<input type="checkbox" name="EauUsee"/>  <label for="EauUsee">Relié aux services des eaux usées</label>
				<br>
				<input type="checkbox" name="Mitoyen"/> <label for="Mitoyen">Bien mitoyen </label>
				<br>
				<input type="checkbox" name="Fibre"/> <label for="Fibre">Eligible à la fibre </label>

			</div>
		</div>
		<br><br>
		<div id="my-menu">
			<!-- Le label -->
			<label for="toggle-block">Autres informations</label> 
			<!-- La checkbox que je choisis cochée au démarrage -->
			<input id="toggle-block" name="toggle-block" type="checkbox" />  
			<!-- Le bloc à afficher -->
			<div id="my-block">
				
				Cochez les options de votre bien:<br />
				<input type="checkbox" name="Piscine"/> <label for="piscine">Piscine</label><br />

				<input type="checkbox" name="Jardin"/> <label for="Jardin">Jardin</label><br />

				<input type="checkbox" name="Ascenseur"/> <label for="Ascenseur">Ascenseur</label><br />

				<input type="checkbox" name="Parking"/> <label for="Parking">Parking</label>
				<br>
				<input type="checkbox" name="Veranda"/> <label for="Veranda">Veranda</label>
				<br>
				<input type="checkbox" name="Balcon"/> <label for="Balcon">Balcon</label>
				<br>
				<input type="checkbox" name="Terrasse"/> <label for="Terrasse">Terrasse</label>
				<br>
				<input type="checkbox" name="Terrain de Tennis"/> <label for="Terrain de Tennis">Terrain de tennis</label>
				<br>
				<input type="checkbox" name="Cave"/> <label for="Cave">Cave</label>
				<br>       
				<input type="checkbox" name="Grenier"/> <label for="Grenier">Grenier</label>
				<br>

			</div>
		</div>
		<br>
		<input type="submit" value="Envoyer le formulaire" > 
	</form>
<?php
	if(isset($_POST['CodeP']))
	{
		$CP = $_POST['CodeP'];
		echo "Le code postal est : " . $CP ."<br>";

	}

	if(isset($_POST['Ville']))
	{
		$Vill = $_POST['Ville'];
		echo "La ville est : " . $_POST['Ville']."<br>";
	}
	
	if(isset($_POST['Adresse']))
	{
		$Adresse = $_POST['Adresse'];
		echo "L'adresse est  : " . $Adresse ."<br>";

	}

	if(isset($_POST['typeB']))
	{
		$TypeB = $_POST['typeB'];
		echo "Le bien est de type: " . $TypeB."<br>";
	}

	if(isset($_POST['Taille']))
	{
		$Taille = $_POST['Taille'];
		echo "Nombre de m² : " . $Taille ."<br>";

	}

	if(isset($_POST['NbP']))
	{
		$NbP = $_POST['NbP'];
		echo "Le nombre de pieces est  : " . $NbP."<br>";
	}

	if(isset($_POST['NbS']))
	{
		$NbS = $_POST['NbS'];
		echo "Le nombre de salle de bain  : " . $NbS ."<br>";
	}

	echo "----------------------------------------<br>";
	if(isset($_POST['EdB']))
	{
		$EdB = $_POST['EdB'];
		echo "L'etat du bien: " . $EdB ." % <br>";

	}

	if(isset($_POST['EdC']))
	{
		$EdC = $_POST['EdC'];
		echo "L'etat de la copropriété: " . $EdC." % <br>";
	}

	if(isset($_POST['EdM']))
	{
		$EdM = $_POST['EdM'];
		echo "L'etat des murs  : " . $EdM ." % <br>";
	}

	if(isset($_POST['EEP']))
	{
		$EEP = $_POST['EEP'];
		echo "L'etat de l'electricité/plomberie  : " . $EEP." % <br>";
	}

	if(isset($_POST['EI']))
	{
		$EI = $_POST['EI'];
		echo "L'etat  de l'isolement : " . $EI  ." % <br>";
	}

	echo "-------------------------------------------------------<br>";

	if(isset($_POST['Lum']))
	{
		$Lum = $_POST['Lum'];
		echo "Luminosité  : " . $Lum ." % <br>";
	}

	if(isset($_POST['Son']))
	{
		$Son = $_POST['Son'];
		echo "Nuisance sonore : " . $Son." % <br>";
	}

	if(isset($_POST['Pop']))
	{
		$Pop = $_POST['Pop'];
		echo "Population environnante : " . $Pop  ." % <br>";
	}
	if(isset($_POST['ProxTrans']))
	{
		$ProxTrans = $_POST['ProxTrans'];
		echo "Proximité des transports  : " . $ProxTrans ." % <br>";
	}

	if(isset($_POST['ProxEcole']))
	{
		$ProxEcole = $_POST['ProxEcole'];
		echo "Proximité des ecoles  : " . $ProxEcole." % <br>";
	}

	if(isset($_POST['ProxCom']))
	{
		$ProxCom = $_POST['ProxCom'];
		echo "Proximité des commerces : " . $ProxCom  ." % <br>";
	}

	if(isset($_POST['Orient']))
	{
		$Orient = $_POST['Orient'];
		echo "Orientation : " . $Orient  ." <br>";
	}
	
	if(isset($_POST['EauUsee']))
	{
		$EauUsee = $_POST['EauUsee'];
		echo "Rélié aux eaux usées : " . $EauUsee  ." <br>";
	}
	
	if(isset($_POST['Mitoyen']))
	{
		$Mitoyen = $_POST['Mitoyen'];
		echo "Bien mitoyen : " . $Mitoyen  ." <br>";
	}
	
	if(isset($_POST['Fibre']))
	{
		$Fibre = $_POST['Fibre'];
		echo "Eligible à la Fibre : " . $Fibre  ." <br>";
	}

	echo "-----------------------------------<br>";

	if(isset($_POST['Piscine']))
	{
		$Piscine = $_POST['Piscine'];
		echo "Piscine : " . $Piscine  ." <br>";
	}
	
	if(isset($_POST['Jardin']))
	{
		$Jardin = $_POST['Jardin'];
		echo "Jardin : " . $Jardin  ." <br>";
	}
	
	if(isset($_POST['Ascenseur']))
	{
		$Ascenseur = $_POST['Ascenseur'];
		echo "Ascenseur : " . $Ascenseur  ." <br>";
	}
	
	if(isset($_POST['Parking']))
	{
		$Parking = $_POST['Parking'];
		echo "Parking : " . $Parking  ." <br>";
	}
	
	if(isset($_POST['Veranda']))
	{
		$Veranda = $_POST['Veranda'];
		echo "Veranda : " . $Veranda  ." <br>";
	}
	
	if(isset($_POST['Balcon']))
	{
		$Balcon = $_POST['Balcon'];
		echo "Balcon : " . $Balcon  ." <br>";
	}

		if(isset($_POST['Terrasse']))
	{
		$Terrasse = $_POST['Terrasse'];
		echo "Terrasse : " . $Terrasse  ." <br>";
	}
	
	if(isset($_POST['Terrain']))
	{
		$Terrain = $_POST['Terrain'];
		echo "Terrain : " . $Terrain  ." <br>";
	}
	
	if(isset($_POST['Cave']))
	{
		$Cave = $_POST['Cave'];
		echo "Cave : " . $Cave  ." <br>";
	}
	
	if(isset($_POST['Grenier']))
	{
		$Grenier = $_POST['Grenier'];
		echo "Grenier : " . $Grenier  ." <br>";
	}



	

?>
</body>
</html>
	