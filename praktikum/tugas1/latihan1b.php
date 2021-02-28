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
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ( $x = 1; $x <= 5; $x++) :   ?>
                <th>Kolom <?= $x; ?></th>
            <?php endfor; ?>
        </tr>
        
        
        <?php for($x = 1; $x <=5; $x++) : ?>
            <tr>
                <th>Baris <?= $x; ?></th>
                <?php for($y = 1; $y <= 5; $y++) : ?>
                    <td><?php echo "Baris $x, Kolom$y"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>