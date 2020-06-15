<?php

$today = date('Y-m-d');
$twentyDays = time() + (20 * 24 * 60 * 60);
$newDate = date('Y-m-d', $twentyDays);
$message = 'Nous somme le ' . $today . '. Dans 20 jours, nous serons le ' . $newDate . '.';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Afficher la date du jour + 20 jours.</p>
    <p><?= $message ?></p>
    
</body>
</html>