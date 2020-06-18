<?php

$firstDate = new DateTime('2016-02-01');
$newDate = new DateTime('2016-03-01');
$dateFormat = '%a';

$daysCalc = $firstDate->diff($newDate);
$difference = $daysCalc->format($dateFormat);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
    <p><?= $difference . ' jours' ?></p>
    <p><?= cal_days_in_month(CAL_GREGORIAN, 2, 2016) . ' jours' ?></p>
    
</body>
</html>