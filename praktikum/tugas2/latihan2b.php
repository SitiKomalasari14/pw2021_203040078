<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>

<?php
$jawabanIsset = "Isset adalah = Function yang menentukan suatu variabel telah didefinisikan dan isinya tidak NULL <br><br>";
//sumber: https://imaninscription.wordpress.com/2012/10/15/php-isset-atau-empty/
$jawabanEmpty = "Empty adalah = Function yang digunakan untuk memeriksa apakah suatu variabel sudah terisi atau belum ";
//sumber: https://medikre.com/stories/penggunaan-fungsi-empty-isset-dan-unset-pada-php

$GLOBALS['jawabanIsset'] = $jawabanIsset;
$GLOBALS['jawabanEmpty'] = $jawabanEmpty;

function soal($style){
    echo "<div class='$style'>" 
    . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] .  
    "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lat2b_203040078</title>
    <style>
    .kotak{
        border: 1px solid black;
        box-shadow: 0 0 3px black;
        padding: 13px;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <?php 
        echo soal("kotak");
    ?>
</body>
</html>