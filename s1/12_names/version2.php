<?php
$names = [
    'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri',
    'Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter',
    'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin',
    'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal',
];
$name_length = $_GET['naamlengte'];
$show_names = [];

// If the string length of an item in $names matches $name_length push it to $show_names
foreach ($names as $value) {
    if (strlen($value) == $name_length) {
        array_push($show_names, $value);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 12</title>
</head>

<body>
    <p>
        <?php
        // Output all items in $show_names
        foreach ($show_names as $value) {
            echo $value . '<br />';
        };
        ?>
    </p>
