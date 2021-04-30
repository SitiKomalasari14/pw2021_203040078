<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 5 - (25 Februari 2021)
Materi pertemuan ke-5 ini mempelajari tentang Array
*/
?>

<?php
// Pengulangan pada Array
// for / foreach
// count untuk mneghitung jumlah elemen yang ada didalam Array
$angka = [3,2,10,11,99,90,22,5];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left; 
        }
        .clear { clear: both;}
    
    </style>
</head>
<body>


<?php for ($i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>




</body>
</html>