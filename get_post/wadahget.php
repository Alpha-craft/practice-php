<?php
// menerima data yang dikirim melalui URL dari file latihanget.php meggnunakan variabel superloblas $_GET
//mengecek apakah user sudah membawa data dari file latihanget.php
//meggunakan function isset()
if (!isset($_GET['foto'])){ //apaah variabel $_GET["foto"] belum ada isinya?
    //paksa user kembali menggunaan redirect
    header("Location:latihanget.php"); //redirect
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Anime</th>
        </tr>
        <tr>
            <td><img src="<?= $_GET["foto"] ?>" alt=""></td>
            <td><?= $_GET["nama"] ?></td>
            <td><?= $_GET["anime"] ?></td>
        </tr>
    </table>
    <a href="latihanget.php">Kembali</a>


</body>
<script>
// console.log( < ? php var_dump($_GET) ? > )
</script>

</html>