<?php

session_start();
if(!$_SESSION["login"]){ //jika belum login

    // paksa untu login
    header("Location:login.php");
    exit;
}
//cek terlebih dahulu apakah tombol kirimkan sudah ditekan atau belum
include "koneksi.php";

//mnegambil id
$id = $_GET["id"];
//mengambil data berdasarkan id dari halaman sebelumnya
$sql= "SELECT * FROM list_waipu WHERE id='$id'";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);

if( isset ($_POST['submit'])){
    // var_dump($_POST);
    //ambil data dari setiap element yang akan dikirim
    $nama = htmlspecialchars( $_POST["nama"]);// htmlspecialchars untuk parse dari html
    $anime = htmlspecialchars( $_POST["anime"]);
    $id = $_POST["id"];

    //query insert data
    $query = "UPDATE list_waipu SET nama = '$nama', anime='$anime' WHERE id= '$id'";
    mysqli_query($conn,$query);
    $tukang_cek = mysqli_affected_rows($conn);
    //cek apakah data berhasil diubah atau tidak
    if ($tukang_cek > 0){
        echo "<script>alert('Data berhasil Diubah');</script>";
        header("Location:list_waipu.php");
    }
    else{
        echo mysqli_error($conn);
        echo "Gamgal/emror";
        echo "<br>";
    }
}
// echo var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, i nitial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Waipu</h2>
    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $result["id"] ?>">
        <label for="nama">Nama waipu:</label>
        <input type="text" name="nama" id="nama" autocomplete="off" required value="<?= $result["nama"] ?>">
        <br>
        <label for="anime">Dari anime:</label>
        <input type="text" name="anime" id="anime" autocomplete="off" required value="<?= $result["anime"] ?>">
        <img src="pict/<?= $result['foto'] ?>" alt="">
        <br>
        <button type="submit" href="main.php" name="submit">Update</button>
    </form>


</body>

</html>