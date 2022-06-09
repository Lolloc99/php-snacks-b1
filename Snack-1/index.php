<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php 
$matches = [
    [
        "homeTeam" => "Maliwan",
        "guestTeam" => "Hyperion",
        "ptHomeTeam" => 47,
        "ptGuestTeam" => 60,
    ],
    [
        "homeTeam" => "Jacobs",
        "guestTeam" => "AOC",
        "ptHomeTeam" => 60,
        "ptGuestTeam" => 52,
    ],
    [
        "homeTeam" => "Torgue",
        "guestTeam" => "Tediore",
        "ptHomeTeam" => 60,
        "ptGuestTeam" => 34,
    ],
];
?>

<ul>
    <?php 
    for($i = 0; $i < count($matches); $i++) {
        $current_match = $matches[$i];
    ?>
        <li>
            <h3>
                <?php echo $matches[$i]["homeTeam"]?> - <?php echo $matches[$i]["guestTeam"]?> 
                | 
                <?php echo $matches[$i]["ptHomeTeam"]?>-<?php echo $matches[$i]["ptGuestTeam"]?>
            </h3>
        </li>
    <?php }?>
</ul>

</body>
</html>