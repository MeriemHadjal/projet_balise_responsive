<!DOCTYPE html>

<html lang="fr">

	<head>

		<!-- META principales -->

		<title>Les balises courantes</title>
		<meta charset="utf-8">
		<meta name="keywords" content="balises courantes">
		<meta name="description" content="Définitions des balises courantes de HTML">
		<meta name="author" content="Meriem, Hirvin et Igal">
		<link rel="icon"  href="../Images/image_onglet.png">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<!-- BODY -->

	<body>

		<section id="banniere">
			
			<h1 id="titre">D'autres balises</h1>
			
		</section>

		<main>

			<header>

				<!-- Barre de navigation -->
	            
	            <?php include("menu.php"); ?>
				
			</header>

			<!-- CONTENU PAGE -->
            <h2>Définition</h2>

			<h2>La balise &#60;b&#62;</h2>

			<p>
				
				Utilisé dans un paragraphe pour une partie de texte en gras, sémantiquement faible, on lui préférera <br>la balise &#60;strong&#62; pour donner de l'importance au texte.
			</p>

			<h2>La balise &#60;i&#62;</h2>

			<p>
				
				Utilisée dans un paragraphe pour indiquer qu'une partie du texte est différent du reste. Il ne faut pas utiliser cette balise lorsque &#60;b&#62;, &#60;cite&#62;,&#60;dfn&#62;,&#60;em&#62;,&#60;q&#62;,&#60;small&#62; ou &#60;strong&#62; peuvent être utilisées. Note : Certains analyseurs de site nous disent que cette balise est obsolète, ce qui est totalement faux.
			</p>

			<p>
				
				L'élément HTML &#60;i&#62; représente un morceau de texte qui se différencie du texte principal. Cela peut par exemple être le cas pour des termes techniques, des phrases dans une langue étrangère ou encore l'expression des pensées d'un personnage. Le contenu de cet élément est généralement affiché en italique.
			</p>

			<img src="../Images/balise_I.png" alt="image de la balise i">

			<h2>La balise &#60;u&#62;</h2>

			<p>
				
				Non utilisé, cette balise créée une confusion avec la balise &#60;a&#62; au niveau des styles
			</p>
			

			<h2>La balise &#60;pre&#62;</h2>

			<p>
				
				L'élément HTML &#60;pre&#62; représente du texte préformaté, généralement écrit avec une police à chasse fixe.<br> Le texte est affiché tel quel, les espaces utilisés dans le document HTML seront retranscrits.
			</p>
			<img src="../Images/balise_PRE.png" alt="photo de la balise pre" height="400" width="700">
		</main>

		<!-- PIED DE PAGE -->
		
		<section id="pied_de_page">
        
        	<?php include("footer.php"); ?>
    	</section>

	</body>
</html>