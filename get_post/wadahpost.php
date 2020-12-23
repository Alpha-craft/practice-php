<?php
// variabel $_POST juga dikirim dalam bentuk associative dengan key sesuai dengan atribute name dalam tag input
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat datang,<?= $_POST["nama"] ?></h1>
</body>

</html>