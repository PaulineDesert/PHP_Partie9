<?php

$today = date('Y-m-d');
$twentyTwoDays = time() - (22 * 24 * 60 * 60);
$newDate = date('Y-m-d', $twentyTwoDays);
$message = 'Nous somme le ' . $today . '. Il y a 22 jours, nous étions le ' . $newDate . '.';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>Afficher la date du jour - 22 jours</p>
    <p><?= $message ?></p>
    
</body>
</html>