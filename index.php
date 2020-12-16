<?php

// Create connection
// $conn = mysqli_connect($servername, $username, $password);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
include 'koneksi.php';
$sql = "SELECT * FROM waipu";
$waipu_pict = "SELECT * FROM pict_waipu";
$data = mysqli_query($conn,$sql);
$pict = mysqli_query($conn,$waipu_pict);
$wife = ['rita.jpg','shiraishi.png','cruzh.jpg','hitomi.jpg','nadeshiko.png','izumi_reina.jpg']

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
<h2>Waipu</h2>
<table class='twaipu' border='1' >
<tr>
<th>Nama</th>
<th>Anime</th>
</tr>
<?php 
while($waipu = mysqli_fetch_assoc($data)): ?>
<tr>
<td><?php echo $waipu["nama"]; ?></td>
<td><?php echo $waipu["anime"]; ?></td>
</tr>
<?php endwhile; ?>
</table>
    
<img src="pict/rita.jpg" alt="">
<div>
<?php while ($pictr=mysqli_fetch_assoc($pict)): ?>
<img src="pict/<?php echo $pictr['nama_file'] ?>" alt="<?php echo $pictr['nama_file'] ?>">

<?php endwhile; ?>
</div>
<div>
<?php foreach ($wife as $wifes): ?>
<img src="pict/<?php echo $wifes ?>" alt="pict/<?php echo $wifes ?>">
<?php endforeach ?>
</div>

    <script src="script/script.js"></script>
</body>

</html>