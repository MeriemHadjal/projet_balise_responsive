<!DOCTYPE html>

<html lang="fr">

<head>

    <!-- Meta principales -->

    <title>Les input</title>
    <meta charset="utf-8">
    <meta name="keywords" content="balises input">
    <meta name="description" content="Définitions des balises input">
    <meta name="author" content="Meriem, Hirvin et Igal">
    <link rel="icon" href="../Images/image_onglet.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- BODY -->

<body>
<header>

<!-- Barre de navigation -->

<?php include("menu.php"); ?>

</header>

    <section id="banniere">
        
        <h1>La balise &#60;input&#62;</h1>
        <p>Sur cette page on va découvrir la balise input et son utilité.</p>
    </section>

    <main>

      
        <!-- CONTENU PAGE -->

        <h2>Qu'est ce que la balise "&#60;input&#62;" ?</h2>

        <p>

            L'élément HTML "input" est utilisé pour créer un contrôl intéractif dans un formulaire web qui permet à l'utilisateur de saisir <br>
            des données. Les saisies possibles et le comportement de l'élément &#60;input&#62; dépend fortement de la valeur indiquée dans son attribut type. <br>
        </p>

        <h2>Les différents types de champs &#60;input&#62;</h2>

        <p>

            La façon dont un élément &#60;input&#62; fonctionne dépend grandement de la valeur de son attribut "type" <br>
            Aussi , pour chacun de ces types, on aura une page de référence dédiée . Par défaut, lorsque l'attribut "type" <br>
            n'est pas présent, il aura la valeur implicite "text".
        </p>

        <p>Les types de champs disponibles sont: </p>

        <ul>

            <li>button: un bouton sans comportement défini</li>
            <li>checkbox: une case à cocher qui permet de sélectionner/déselctionner une valeur</li>
            <li>date: un contrôle qui permet de saisir une date (composé d'un jour, d'un mois et d'une année</li>
            <li>email: un champ qui permet de saisir une adresse électronique</li>
            <li>
                password: un champ text sur une seule ligne dont la valeur est masquée. <br>
                Les attributs "maxlenght" et "minlength" définissent la taille maximale et minimale de la valeur à saisir dans le champ.S
            </li>
        </ul>
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
