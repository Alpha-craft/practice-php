<?php
require "../koneksi.php";
$keyword = $_GET["keyword"];
$sql = "SELECT * FROM list_waipu WHERE nama LIKE '%$keyword%' OR anime LIKE '%$keyword%' ORDER BY id DESC";
$query = mysqli_query($conn,$sql);


?>
<table border="1" style="width:50%">
    <tr>
        <th>No:</th>
        <th>Settings</th>
        <th>Nama Chara</th>
        <th>Anime</th>
        <th>Foto</th>
    </tr>
    <?php $nomor = 1; ?>
    <?php foreach ($query as $wife) :?>
    <tr>
        <td><?= $nomor; ?></td>
        <td><a href="delete.php?id=<?= $wife["id"] ?>">Hapus</a>|<a href="edit.php?id=<?= $wife["id"] ?>">Edit</a>
        </td>
        <td><?= $wife["nama"] ?></td>
        <td><?= $wife["anime"] ?></td>
        <td class="image"><img src="pict/<?= $wife["foto"] ?>" alt=""></td>
        <?php $nomor++; ?>
        <?php endforeach ?>
    </tr>
</table>