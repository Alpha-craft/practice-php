<?php
//cek terlebih dahulu apakah tombol kirimkan sudah ditekan atau belum
include "koneksi.php";
if( isset ($_POST['submit'])){
    // var_dump($_POST);
    // var_dump($_FILES);
    // var_dump($_POST);
    //ambil data dari setiap element yang akan dikirim
    $nama = htmlspecialchars( $_POST["nama"]);// htmlspecialchars untuk parse dari html
    $anime = htmlspecialchars( $_POST["anime"]);
    // $pict
    $namafile = $_FILES["pict"]["name"];
    $ukuranfile = $_FILES["pict"]["size"];
    $emror = $_FILES["pict"]["error"];
    $tmp = $_FILES["pict"]["tmp_name"];
    $ekstensi = ["jpg","jpeg","gif","png"];
    $ekstensigambar = explode(".",$namafile);
    $ekstensigambar = strtolower( end($ekstensigambar));
    if (!in_array($ekstensigambar,$ekstensi)){
        echo "Yang anda Upload Bukan gambar";
        return false;
    }

    //setelah gambar sudah dicek maka tinggal upload
    move_uploaded_file($tmp,"pict/".$namafile);
        


    //query insert data
    $query = "INSERT INTO list_waipu VALUES (null,'$nama','$anime','$namafile')";
    mysqli_query($conn,$query);
    $tukang_cek = mysqli_affected_rows($conn);
    if ($tukang_cek > 0){
        echo "<script>alert('Data berhasil Dimasukkan');</script>";
        header("Location:list_waipu.php");
    }
    else{
        echo "Gamgal/emror";
        echo "<br>";
        echo mysqli_error($conn);
    }
}
// echo var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Input Waipu</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama waipu:</label>
        <input type="text" name="nama" autocomplete="off" id="nama" required>
        <br>
        <label for="anime">Dari anime:</label>
        <input type="text" name="anime" id="anime" autocomplete="off" required>
        <br>
        <label for="pict">Pilih Foto</label>
        <input type="file" name="pict" id="pict" required>
        <button type="submit" href="main.php" name="submit">Masukkan</button>
    </form>


</body>

</html>