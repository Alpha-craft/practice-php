<?php
//method get
// $_GET["nama"] = "Ainurahman";

// mengirim variabel melalui url 
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
    <title>Document</title>
</head>

<body>
    <?php foreach ($waipu as $wife) :?>
    <li>
        <a
            href="wadahget.php?nama=<?= $wife["nama"]?>&anime=<?= $wife["anime"]?>&foto=<?= $wife["Foto"] ?>"><?= $wife["nama"] ?></a>
    </li>
    <?php endforeach ?>
</body>

</html>