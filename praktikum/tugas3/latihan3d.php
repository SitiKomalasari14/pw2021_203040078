<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php 
 $pemain_bola = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ]
];
$total_main = 0;
$total_gol= 0;
$total_assist = 0;
foreach ($pemain_bola as $pb => $value) {
    $total_main += $value['main'];
    $total_gol += $value['gol'];
    $total_assist += $value['assist'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat3d_203040078</title>
    <style>
    table {
        text-align: center;
        font-family: arial;
    }
    
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10" >
        <td><b>NO</b></td>
        <td><b>NAMA</b></td>
        <td><b>CLUB</b></td>
        <td><b>MAIN</b></td>
        <td><b>GOAL</b></td>
        <td><b>ASSIST</b></td>
        <tr></tr>
    
        <?php  $nomor = 1; ?>    
        <?php foreach ($pemain_bola as $pb) : ?>  
            <td><?= $nomor; ?></td>
            <td><?= $pb["nama"];?></td>
            <td><?= $pb["club"];?></td>
            <td><?= $pb["main"];?></td>
            <td><?= $pb["gol"];?></td>
            <td><?= $pb["assist"];?></td>
            <tr></tr>    
        <?php $nomor++; ?>
        <?php endforeach; ?>
        <th>#</th>
        <th colspan="2">
        <center>Jumlah</center>
        </th>
        <th><?= $total_main ?></th>
        <th><?= $total_gol ?></th>
        <th><?= $total_assist ?></th>
                
    </table>
   
</body>
</html>