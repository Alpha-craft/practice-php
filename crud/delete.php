<?php
include "koneksi.php";
$id = $_GET["id"];
$sql = "DELETE FROM  list_waipu  WHERE id=$id";
mysqli_query($conn,$sql);
$tukang_cek = mysqli_affected_rows($conn);
if ($tukang_cek > 0){
    echo "data berhasil dihapus";
    header("Location:list_waipu.php");
}
else{
    echo "data gagal dihapus";
}
?>