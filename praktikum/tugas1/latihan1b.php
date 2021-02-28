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
            <?php for ( $i = 1; $i <= 5; $i++) :   ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        
        
        <?php for($i = 1; $i <=5; $i++) : ?>
            <tr>
                <th>Baris <?= $i; ?></th>
                <?php for($b = 1; $b <= 5; $b++) : ?>
                    <td><?php echo "Baris $i, Kolom$b"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>