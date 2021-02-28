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
<?php for($i = 1; $i <= 6; $i++) : ?>
    <tr>
        <?php for( $j = 1; $j <= 6; $j++) : ?>
            <?php if (($i + $j) %2 == 1) { ?>
                <td class="biru"></td>
            <?php } else if (($i + $j) %2 == 0 ) { ?>
                <td class="salmon"></td>
            <?php } ?>
        <?php endfor; ?>
    
    </tr>
<?php endfor;  ?>

</table> 
</body>
</html>