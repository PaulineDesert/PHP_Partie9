<?php

function selectYear() {
    for ($i = 2030; $i >= 2010; $i--) {
        echo '<option value="'. $i . '">' . $i . '</option>';
    }
}

$month = $_POST['month'];
$year = $_POST['year'];
$date = date($month . '/01' . '/' . $year);
$endMonth = date( "Y/m/d", strtotime( $date . "+1 month" ));

function showMonth($month) {
    $months = ['01' => 'Janvier', '02' => 'Février', '03' => 'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin', '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre'];

    foreach ($months as $key => $value) {
        if ($key == $month) {
            echo $value;
        }
    }
}

if (isset($month) && isset($year)) {
    $chooseDate = new DateTime($date);
    $monthMore = new DateTime($endMonth);
    $dateFormat = '%a';

    $daysCalc = $chooseDate->diff($monthMore);
    $difference = $daysCalc->format($dateFormat);
    
    function showDays($difference, $chooseDate) {

        for ($i = 1; $i < $chooseDate->format('N'); $i++) {
            echo '<div class="col-sm text-center border border-black"></div>';
        }
        for ($day = 1; $day <= $difference; $day++) {
            echo '<div class="col-sm text-center border border-black"><p>' . $day . '</p></div>';
            if (($day +  $chooseDate->format('N') - 1) % 7 == 0) {
                echo '</div><div class="row">';
            }
        }
        if ($day !== 28 && $chooseDate->format('N') !== 1) {
            if($day + $chooseDate->format('N') <= 35) {
                echo str_repeat('<div class="col-sm text-center border border-black"></div>', 37 - ($day + $chooseDate->format('N')));
            }
            if($day + $chooseDate->format('N') > 35 && $day + $chooseDate->format('N') !== 36) {
                echo str_repeat('<div class="col-sm text-center border border-black"></div>', 44 - ($day + $chooseDate->format('N')));
            }
            if ($day + $chooseDate->format('N') == 36) {
                echo '<div class="col-sm text-center border border-black"></div>';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP</title>
</head>

<body>
    <h1 class="ml-5 m-3">TP</h1>
    <p class="ml-5 mb-0">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.</p>
    <p class="ml-5">En fonction des choix, afficher un calendrier comme celui-ci : </p>
    <form action="index.php" method="post" class="m-5">
        <label for="month">Mois</label>
        <select id="month" name="month">
            <option value="--" selected disabled>--</option>
            <option value="01">Janvier</option>
            <option value="02">Février</option>
            <option value="03">Mars</option>
            <option value="04">Avril</option>
            <option value="05">Mai</option>
            <option value="06">Juin</option>
            <option value="07">Juillet</option>
            <option value="08">Août</option>
            <option value="09">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
        <select name="year" id="year">
            <option valeur="--" selected disabled>--</option>
            <?= selectYear() ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>

    <div id="calendar" class="m-5">
        <h2 class="h4 ml-1"><?= showMonth($month) . chr(10) . $year ?></h2>
        <div class="container">
            <div class="row text-center justify-content-center text-white" id="weekdays">
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Lundi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Mardi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Mercredi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Jeudi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Vendredi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Samedi</p>
                </div>
                <div class="col-sm border border-white">
                    <p class="m-0 p-1">Dimanche</p>
                </div>
            </div>
            <div class="row" id="days">
                <?= showDays($difference, $chooseDate) ?>
        </div>

</body>

</html>