<?php

// isi dalam for(inisialisasi,kondisi terminasi,increment/decrement)
// inisialisasi digunakan untuk menentukan variabel awal untuk perulangan
// kondisi terminasi untuk memberhentikan perulangannya
// increment atau decrement agar perulanggan bisa maju atau mundur

for ($i = 0; $i<11 ;++$i){
    echo $i;
}

//while
$i = 0; //deklarasi variabel untuk inisialisasi
while($i < 9){ //buat kondisi terminasi dalam while()
    echo "isok ta?<br>";
    $i++; //increment atau decrement agar nilai maju atau mundur

}
    do{
        echo 'hello world';
        $i++;
    }
    while($i  < 20 );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < 9 ; ++$i): ?>
        <li><?= 'nilai variabel i :'.$i ?></li>
        <?php endfor ?>
    </ul>
    <table border='1'>
        <tr>
            <th>Angka</th>
        </tr>
        <tr>
            <?php while($i<20): ?>
            <td><?= $i ?></td>
            <?php $i++; ?>
            <?php endwhile; ?>
        </tr>
    </table>
    <div>
        <div>
            <div></div>
        </div>
    </div>
</body>

</html>