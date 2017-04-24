<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 1 Exercice8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
//initialisation de trois variables comprenant les opérations suivantes :       
        $addition = 3 + 4;
        $multiplication = 5 * 20;
        $division = 45 / 5; 
        ?>
<!-- affichage des calculs avec une phrase de présentation ia la méthode echo -->
        <h1>Les résultats !</h1>
        <p><?php echo 'trois plus quatre font ' . $addition; ?></p>
        <p><?php echo 'cinq fois vingt font ' . $multiplication; ?></p>
        <p><?php echo 'quarante-cinq divisé par cinq font ' . $division; ?></p>
    </body>
</html>