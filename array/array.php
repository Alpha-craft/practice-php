<?php
$array = [1,2,3,4];
foreach ($array as $ar){
    echo $ar;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php for ($i = 0 ; $i < 10 ; $i++): ?>
<div style='display:flex;'>
    <div><?= $i ?></div>
</div>
<?php endfor ?>


<body>

</body>

</html>