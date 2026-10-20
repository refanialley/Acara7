
<?php
$data = [
    ["Moyudan", 27.62, 31497],
    ["Minggir", 27.27, 29886],
    ["Seyegan", 26.63, 47129],
    ["Godean", 26.84, 72028],
    ["Gamping", 29.25, 108675]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kecamatan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4c77af;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Kecamatan</h2>

<table>
    <tr>
        <th>Kecamatan</th>
        <th>Luas Wilayah (km²)</th>
        <th>Jumlah Penduduk</th>
    </tr>

    <?php foreach ($data as $baris) { ?>
    <tr>
        <td><?= $baris[0]; ?></td>
        <td><?= $baris[1]; ?></td>
        <td><?= number_format($baris[2], 0, ',', '.'); ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
