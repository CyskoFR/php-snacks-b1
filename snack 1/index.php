<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$stage_one_list = [
    [
        'home_team' => 'Atlanta Hawks',
        'guest_team' => 'Boston Celtics',
        'home_team_score' => '103',
        'guest_team_score' => '88',
    ],
    [
        'home_team' => 'Brooklyn Nets',
        'guest_team' => 'Charlotte Hornets',
        'home_team_score' => '13',
        'guest_team_score' => '56',
    ],
    [
        'home_team' => 'Chicago Bulls',
        'guest_team' => 'Cleveland Cavaliers',
        'home_team_score' => '96',
        'guest_team_score' => '101',
    ],
    [
        'home_team' => 'Dallas Mavericks',
        'guest_team' => 'Indiana Pacers',
        'home_team_score' => '111',
        'guest_team_score' => '112',
    ],
    [
        'home_team' => 'Los Angeles Lakers',
        'guest_team' => 'Utah Jazz',
        'home_team_score' => '156',
        'guest_team_score' => '68',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
    <h1>Stage One</h1>
    <br>
    <?php for($i = 0; $i < count($stage_one_list); $i++) { ?>
        <p><?php echo "<strong>{$stage_one_list[$i]['home_team']}</strong> - <strong>{$stage_one_list[$i]['guest_team']}</strong> | {$stage_one_list[$i]['home_team_score']} - {$stage_one_list[$i]['guest_team_score']}"?></p>
        <hr>
    <?php } ?>
</body>
</html>