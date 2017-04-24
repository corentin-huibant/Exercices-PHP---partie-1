<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 1 Exercice4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
// créations de quatre variables de type chaine de caractères, chiffre, chiffre décimal et booléen
            $name = 'Corentin';
            $age = 28;
            $weight = 74.5;
            $informations = true; 
        ?>
<!--  affiche de ces quatre variables dans une phrase avec la méthode echo -->
        <p><?php echo 'Bonjour, je m\'appelle ' . $name . ', j\'ai ' . $age . ' ans, je pèse ' . $weight . ' kilos. Tapez 1 si ces informations sont vraies : ' . $informations; ?></p>
    </body>
</html>