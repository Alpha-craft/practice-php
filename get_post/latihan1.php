<?php
$data = [
    [
        "nama" => "Ainurahman",
        "kelas" => "XI-SIJA"
    ],
    [
        "nama" => "Haris Purwanto",
        "kelas" => "XI-SIJA"
    ],
    [
        "nama" => "Ivan Nir Cahya",
        "kelas" => "XI-SIJA"
    ]
];
$waipu = [
    [
        "nama" => "Rita Rossweisse",
        "anime" => "Honkai Impact3",
        "Foto" => "pict/rita.jpg"
    ],
    [
        "nama" => "Bianka Ataegina ",
        "anime" => "Honkai Impact3",
        "Foto" => "pict/bianka.jpg"
    ],
    [
        "nama" => "Cruzh Karsten",
        "anime" => "Re:zero kara hajimeru isekai seikatsu",
        "Foto" => "pict/cruzh.jpg"
    ],
    [
        "nama" => "Shiraishi",
        "anime" => "Tanaka-kun wa itsumo kedarunge",
        "Foto" => "pict/shiraishi.png"
    ],
    [
        "nama" => "Tsukishiro Hitomi",
        "anime" => "Irozoku Sekai no Ashita Kara ",
        "Foto" => "pict/hitomi.jpg"
    ],
    
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h2>Data Anggota mamgang:</h2>
    <table border='1'>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php foreach ($data as $datas) :?>
        <tr>
            <td><?= $datas["nama"] ?></td>
            <td><?= $datas["kelas"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h2>Waipu:</h2>
    <table class="tabel" style="width:50%" border="1">
        <?php foreach ($waipu as $wife) :?>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Anime</th>
        </tr>
        <tr>
            <td><img class="image" src="<?= $wife['Foto'] ?>" alt=""></td>
            <td><?= $wife["nama"] ?></td>
            <td><?= $wife["anime"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>