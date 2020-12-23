<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Upload File</h2>
    <form action="" method="post">
        <label for="pict">Pilih gambar</label>
        <input type="file" id="pict" name="pict">
        <button type="submit" name="submit">Upload!</button>
    </form>
    <?= var_dump($_POST["pict"]) ?>
</body>

</html>