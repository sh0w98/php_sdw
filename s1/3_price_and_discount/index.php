<?php
    $price = 200;
    $discount = 25;
    $payable = $price - ($price * ($discount / 100));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oefening 3</title>
    </head>
    <body>
        <p>
            De prijs is <?= $price ?> euro. <br />
            De korting is <?= $discount ?> %. <br />
            Te betalen: <?= $payable ?> euro.
        </p>
    </body>
</html>
