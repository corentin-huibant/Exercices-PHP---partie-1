<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 1 Exercice3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
//initialisation de la variable kilometers avec le chiffre 1 puis affichage de la variable dans une phrase
            $kilometers = 1;
        ?>
            <p id='red'> <?php echo 'Vous avez fait ' . $kilometers . ' kilomètre. '; ?></p>
        <?php
//incrémentation de la variable puis affiche dans une phrase
            $kilometers += 2;
        ?>
            <p id='blue'> <?php echo 'Vous avez fait ' . $kilometers . ' kilomètres. '; ?></p>
        <?php
//nouvelle incrémentation de la variable puis affiche dans une phrase
            $kilometers += 122;
        ?>
            <p id='gray'> <?php echo 'Vous avez fait ' . $kilometers . ' kilomètres. ';?></p>
    </body>
</html>