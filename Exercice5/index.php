<?php

$today = new DateTime(date('Y-m-d'));
$previous = new DateTime('2016-05-16');
$dateFormat = '%a';

$daysCalc = $today->diff($previous);
$difference = $daysCalc->format($dateFormat);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
    <p><?= $difference . ' jours' ?></p>
    
</body>
</html>