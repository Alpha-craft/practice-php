<?php
session_start();
if(!$_SESSION["login"]){ //jika belum login

    // paksa untu login
    header("Location:login.php");
    exit;
}
include "koneksi.php";
$result = mysqli_query($conn,"SELECT * FROM list_waipu ORDER BY RAND() ");

if (isset($_POST["cari"])){
    $keyword = $_POST["keyword"];

    $result = mysqli_query($conn,"SELECT * FROM list_waipu WHERE nama LIKE '%$keyword%' OR anime LIKE '%$keyword%' "); //% berarti wild card 
    //menggunakan like agar keyword lebih fleksibel dan tidak harus sama persis dengan inputan user 
}

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
    <a href="logout.php">logout</a>
    <h2>Cari Waipu</h2>
    <form action="" method="post">
        <input type="text" autofocus placeholder="Masukkan nama waipu..." name="keyword" id="keyword">
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>
    <h2>List Waipu</h2>
    <a href="main.php">Upload</a>
    <div id="change">
        <table border="1" style="width:50%">
            <tr>
                <th>No:</th>
                <th>Settings</th>
                <th>Nama Chara</th>
                <th>Anime</th>
                <th>Foto</th>
            </tr>
            <?php $nomor = 1; ?>
            <?php foreach ($result as $wife) :?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><a href="delete.php?id=<?= $wife["id"] ?>">Hapus</a>|<a
                        href="edit.php?id=<?= $wife["id"] ?>">Edit</a>
                </td>
                <td><?= $wife["nama"] ?></td>
                <td><?= $wife["anime"] ?></td>
                <td class="image"><img src="pict/<?= $wife["foto"] ?>" alt=""></td>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tr>
        </table>
    </div>

    <script src="script/script.js"></script>
</body>

</html>