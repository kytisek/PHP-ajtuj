<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php




$sum = 0;
for($i=20;$i<=100;$i++){
    if($i % 2 == 0 and $i % 3 != 0){
        $sum = $sum+$i;
    }
}
echo "suma = $sum<br/>";
if ($sum > 10000){
    echo"<div style='width: 100px; height: 100px, background-color: blue'>tobek</div><br/>";
} else{
    echo"<div style='width: 200px; height: 200px, background-color: red'>rob</div><br/>";
}









    ?>
</body>
</html>