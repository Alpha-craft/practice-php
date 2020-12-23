<?php
//method post akan mengiriman data melalui form tidak melalui URL seperti method get

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="wadahpost.php" method="post">
        <label for="nama">Masukkan nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>