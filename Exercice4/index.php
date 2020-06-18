<?php

setlocale(LC_TIME, 'fra.utf8');
$aujourdhui = new DateTime();
$previous = DateTime::createFromFormat('d-m-Y H:i:s', '2-08-2016 15:00:00');
// strftime('%A %e %B %Y à %Hh%M', mktime(15, 00, 0, 8, 2, 2016));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Afficher le timestamp du jour.  
    Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
    <p><?= $aujourdhui->getTimestamp() ?></p>
    <p><?= $previous->getTimestamp() ?></p>
    
</body>
</html>