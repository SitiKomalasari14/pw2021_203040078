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
    <style>
        .salmon {
            background: salmon;
            margin: 2px;
            display: inline-block;
            border: 2px solid black;
        }
        .biru {
            background: lightblue;
            display: inline-block;
            border: 2px solid black;
            margin: 2px
        }
    
    </style>
</head>
<body>

<table border="0" cellpadding="10" cellspacing="0">
<?php for($kolom = 1; $kolom <= 6; $kolom++) : ?>
    <tr>
        <?php for( $baris = 1; $baris <= 6; $baris++) : ?>
            <?php if (($kolom + $baris) %2 == 1) { ?>
                <td class="biru"></td>
            <?php } else if (($kolom + $baris) %2 == 0 ) { ?>
                <td class="salmon"></td>
            <?php } ?>
        <?php endfor; ?>
    
    </tr>
<?php endfor;  ?>

</table> 
</body>
</html>