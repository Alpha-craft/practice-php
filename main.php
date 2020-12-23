<?php
include 'koneksi.php';
$sql = 'SELECT * FROM pict_waipu';
$waipu = mysqli_query($conn,$sql);
// $sql1 = 'SELECT * FROM pict_waipu WHERE id%2=1';
// $istri = mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- clas kolom untuk multiple columns -->
    <div class="kolom">
        <div class="image">
            <?php while($wife = mysqli_fetch_assoc($waipu)): ?>
            <div class="clear"></div>
            <img src="pict/<?php echo $wife['nama_file'] ?>" alt="">
            <?php endwhile; ?>
        </div>
        <!-- <div class="image">
            <?php while($waipu = mysqli_fetch_assoc($istri)): ?>
            <div class="clear"></div>
            <img src="pict/<?php echo $waipu['nama_file'] ?>" alt="">
            <?php endwhile; ?>
        </div> -->
    </div>


</body>

</html>