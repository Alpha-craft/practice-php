<?php 
// belajar function
function greeting($nama){
    echo 'Selamat Datang,'.$nama.'-sama';
}
function salam($name = 'Rahman'){
    echo 'Selamat datang'.$name;
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
    <h1><?= greeting('Rahman'); ?></h1>
    <h2><?= salam(); ?></h2>
</body>

</html>