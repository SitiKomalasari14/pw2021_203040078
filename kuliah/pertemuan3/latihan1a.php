<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 3 - (17 Februari 2021)
Materi pertemuan ke-3 ini akan mempelajari mengenai Pengulangan dan Pengkondisian 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: pink;
        }
    </style>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
    <?php
        // for($i = 1; $i <= 3; $i++ ) {
        //     echo "<tr>";
        //     for($j = 1; $j <= 5; $j++) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "</tr>";
        // }
    ?>

    <?php for($i = 1; $i <= 5; $i++) :  ?>
        <?php if( $i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif;?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    
    <?php endfor; ?>

    </table>

    
</body>
</html>