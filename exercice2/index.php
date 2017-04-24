<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 1 Exercice2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
//initialisation de trois variables, deux de type chaine de caractères et une de type chiffre      
        $name = 'HUIBANT';
        $lastName = 'Corentin';
        $age = 28; 
        ?>
<!-- affichage des trois variables au sein d'un paragraphe -->
        <p><?php echo 'Bonjour, je m\'appelle ' . $name . ' '. $lastName. ', j\'ai ' . $age . ' ans.'; ?></p>
    </body>
</html>
