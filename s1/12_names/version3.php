<?php
// Disable notices
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$names = [
    'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri',
    'Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter',
    'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin',
    'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal',
];
$name_length = $_GET['naamlengte'];
$show_names = [];

// If $name_length is null, show all names.
// Otherwise, push the elements with a strlen that matches $name_length to $show_names
if ($name_length == null) {
    $show_names = $names;
} else {
    foreach ($names as $value) {
        if (strlen($value) == $name_length) {
            array_push($show_names, $value);
        }
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
        // If $show_names is empty, display a message.
        // Otherwise, output all values in $show_names
        if ($show_names == []) {
            echo 'No names found with that length';
        } else {
            foreach ($show_names as $value) {
                echo $value . '<br />';
            }
        }
        // If name_length is set, show a link to display all names
        if (isset($name_length)) {
            echo '<a href="version3.php">View all names</a>';
        }
        ?>
    </p>
</body>

</html>
