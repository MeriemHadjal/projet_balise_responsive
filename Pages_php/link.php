<!DOCTYPE html>

<html lang="fr">

	<head>

		<!-- Meta principales -->

		<title>La balise &#60;link&#62;  </title>
		<meta charset="utf-8">
		<meta name="keywords" content="balises &#60;link&#62;  definition">
		<meta name="description" content="Définitions de la balise &#60;link&#62;">
		<meta name="author" content="Meriem, Hirvin et Igal">
		<link rel="icon"  href="../Images/image_onglet.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

	<header>

				<!-- Barre de navigation -->

				<?php include("menu.php"); ?>
	            
			</header>

		<section id="banniere">
            <p>lorem</p>

			<h1>La balise &#60;link&#62;</h1>

			<p>Sur cette page on va découvrir la balise &#60;link&#62; et son utilité.</p>
		</section>

		<main>


			<!-- CONTENU PAGE -->

			<p>
				
				L'élément HTML &#60;link&#62; définit la relation entre le document courant et une ressourse externe. Cet élément peut être utilisé pour définir un lien vers une feuille de style ou un cadre de navigation (accéder à la même page dans une langue différente par exemple)<br>
			</p>

			<p>
				Pour lier une feuille de style externe, on inclut un élément &#60;link&#62; de la forme suivante à l'intérieur de l'élément &#60;head&#62;<br>
			</p>

		
			<img src="../Images/image_link3.png" alt="photo de la balise &#60;link&#62;"><br>
	        


			<p>
				Un élément &#60;link&#62; element peut être placé dans un élément &#60;head&#62; ou  &#60;body&#62; selon la valeur de la relation. C'est cependant une bonne pratique que de placer l'ensemble des éléments  &#60;link&#62; dans l'élément &#60;head&#62;.<br>
			</p>

	        <img src="../Images/image_link1.png" alt="photo de la balise &#60;link&#62;"><br>
	        
	        <p> 
	            Lorsque &#60;link&#62; est utilisé pour la favicon d'un site. Voici le code à insérer entre les balises &#60;head&#62; et &#60;/head&#62;> de votre page : <br>
	        
	        </p>
	        
		    <img src="../Images/image_link2.png" alt="photo de la balise &#60;link&#62;"><br>
		</main>
		
	
		<!-- PIED DE PAGE -->
		
		<section id="pied_de_page">
        
        	<?php include("footer.php"); ?>
		</section>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>