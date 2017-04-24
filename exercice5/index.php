<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 1 Exercice5</title>
    </head>
    <body>
        <?php 
//initialisation d'une variable qui ne contient rien.
        $number = null;
//affichage de la première variable nulle.
        ?>
        <p> <?php echo '- quel âge as-tu ?'; ?></p>
        <p> <?php echo '- ' . $number . ' années !'; ?> </p>
        <p> <?php echo '- hein ?'; ?></p>
        <?php 
//réinitialiser la variable avec un nombre.
        $number += 10;
//affichage de la nouvelle variable.
        ?>
        <p> <?php echo '- Pardon. J\'ai ' . $number . ' ans'; ?></p>
    </body>
</html>