<?php

$presentTime = new DateTime();

$destinationTime = new DateTime('2022-12-24 20:15:30');


$gap = $presentTime->diff($destinationTime);

$minutes = $gap->days * 24 * 60;
$minutes += $gap->h * 60;
$minutes += $gap->i;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-striped w-70">
        <thead>
            <tr>
                <th>Date actuelle</th>
                <th>Date de destination</th>
                <th>Gap</th>
                <th>Carburant nécessaire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $presentTime->format('M d Y A h i'); ?></td>
                <td><?php echo $destinationTime->format('M d Y A h i'); ?></td>
                <td><?php echo $gap->format('%Y an %M mois %d jours %hh %im'); ?></td>
                <td><?php echo round($minutes / 10000, 2) . ' Litres'; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>