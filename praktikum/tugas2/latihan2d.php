<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php

function hitungDeterminan($a, $b, $c, $d)
{
    $matriks = ($a * $d) - ($b * $c);

    echo "<table style='border-left: 2px solid black; border-right: 2px solid black; cellspacing='5'; cellpadding='5'>
    <tr>
        <td>$a</td>
        <td>$b</td>
    </tr>
    <tr>
        <td>$c</td>
        <td>$d</td>
    </tr>
    </table>";
    echo "<b>Determinan dari Matriks tersebut adalah $matriks</b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat2d_203040078</title>
</head>

<body>

    <?php hitungDeterminan(1, 2, 3, 4); ?>
</body>

</html>