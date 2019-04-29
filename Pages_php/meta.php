<!DOCTYPE html>

<html lang="fr">

<head>

    <!-- META principales -->

    <title>Les balises META</title>
    <meta charset="utf-8">
    <meta name="keywords" content="balises meta definition">
    <meta name="description" content="Définitions des balises META">
    <meta name="author" content="Meriem, Hirvin et Igal">
    <link rel="icon" href="../Images/image_onglet.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- BODY -->

<body>
<header>

<!-- Barre de navigation -->

<?php include("menu.php"); ?>

</header>

    <section id="banniere">
        
        <h1 id="titre">Les balises META</h1>

        <p>Sur cette page on va découvrir les balises meta et leur utilité.</p>
    </section>

    <main>

       
        <!-- CONTENU PAGE -->

        <p>

            Question éternelle des forums de discusion sur la conception web et le référencement: les balises META, ça sert à quoi ? <br>
            C'est pris en compte par les moteurs de recherche ? Est-ce que ça permet d'allonger les péniches ?
        </p>

        <p>

            Les balises META c'est utile quand c'est utile et quand c'est pas utile ... eh bien c'est inutile ! :) <br>
            Vous l'aurez compris ça dépend. Mais pour pas vous laisser avec cette vérité, nous vous proposons un petit point sur les balises META
        </p>

        <h2>C'est quoi une balise META ?</h2>

        <p>
            Les balises META servent à placer des métadonnée (metadata) dans une page HTML. On placera ces informations à l'intérieur de la balise <br> "head" et elles ne seront pas afficher sur la page donc pas visible aux yeux des visiteurs du site.
        </p>

        <p>

            A qui sont destinées ces informations ? Eh bien, à tous les outils susceptibles de les exploiter. Et notament:
        </p>

        <ul>
            <li>aux navigateurs web</li>
            <li>aux moteurs de recherche</li>
            <li>
                plus largement, à tous les outils d'indexation, c'est-à-dire tous les outils qui analysent vos pages <br> pour y identifier divers informations
            </li>
        </ul>

        <h2>Anatomie d'une balise META</h2>

        <p>

            Lorsque l'on parle de "balise META", on parle en réalité de l'élément "meta" en HTML. Si on tient à parler de balises, on devrait plutôt parler de "balise &#60;meta&#62;". <br>
            Lorsqu'on parle d'une balise META, on pense généralement à un élément "meta" qui utiliserait des attributs et valeurs précises. On parle par exemple de "META Description" <br>
            pour la balise suivante:
        </p>

        <img src="../Images/meta_desciption.png" alt="photo de la balise meta desciption">

        <h2>Des métadonnées placées dans l'entête</h2>

        <p>

            Les balises meta vont nous permettre de donner au navigateur des informations sur la page web à afficher. On dit que ce sont des métadonnées (du grec meta "après" et du latin data "informations", soit une donnée servant à définir ou décrire une autre donnée).
        </p>

        <p>

            Les balises meta seront toujours placée entre les balises &#60;head&#62; et &#60;/head&#62;. En effet, l'entête d'un document HTML contient des informations sur la page alors que le corps (body) contient tout ce qui doit être affiché.
        </p>

        <p>On distingue 2 types de balises méta :</p>
        <ul>

            <li>Les balises méta "name" qui permette de décrire la page.</li>
            <li>
                Les balises méta "http-equiv" qui envoie des informations supplémentaires via le protocole HTTP.
            </li>
        </ul>

        <p><a href="#titre">Début de page</a></p>
    </main>

    <!-- PIED DE PAGE -->

    <section id="pied_de_page">
        
        <?php include("footer.php"); ?>
    </section>

</body>

</html>
