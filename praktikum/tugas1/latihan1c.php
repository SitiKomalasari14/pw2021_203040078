<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1c</title>
    <style>
        .lingkaran {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border-radius: 100%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;
        }
    </style>
</head>

<body>

    <?php
    for ($x = 1; $x <= 3; $x++) : ?>
        <?php for ($y = 1; $y <= $x; $y++) : ?>
            <div class="lingkaran"><?php echo $x; ?> </div>
        <?php endfor; ?>
        <?php echo "<br>" ?>
    <?php endfor; ?>








</body>

</html>