<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=0;$i<=2;$i++){
        for($j=0;$j<=2;$j++){
            $tik[$i] [$j]=rand(1,2);
        }
    }
    for($i=0;$i<=2;$i++){
        for($j=0;$j<=2;$j++){
            if($tik[$i] [$j]==1){
                echo"<img height=100px src='x.png'/>";
            }else {
                echo"<img height=100px src='o.png'/>";
            }
        }
        echo"<br>";
    }
    echo "<br>";


    for($i=0;$i<=2;$i++){
        for($j=0;$j<=2;$j++){
            $tik[$i] [$j]=rand(1,2);
        }
    }
    for($i=0;$i<=2;$i++){
        for($j=0;$j<=2;$j++){
            if($tik[$i] [$j]==1){
                echo"x";
            }else {
                echo"o";
            }
        }
        echo"<br>";
    }
    echo "<br>";


$cross=0; //2
$circle=0; //1
for($i=0;$i<=2;$i++){
    if($tik[$i] [0]==1 && $tik[$i] [1]==1 && $tik[$i] [2]==1)
    $circle++;
    if($tik[$i] [0]==2 && $tik[$i] [1]==2 && $tik[$i] [2]==2)
    $cross++;
    if($tik[0] [$i]==1 && $tik[1] [$i]==1 && $tik[2] [$i]==1)
    $circle++;
    if($tik[0] [$i]==2 && $tik[1] [$i]==2 && $tik[2] [$i]==2)
    $cross++;
}
if($tik[0] [0]==1 && $tik[1] [1]==1 && $tik[2] [2]==1)
    $circle++;
    if($tik[0] [0]==2 && $tik[1] [1]==2 && $tik[2] [2]==2)
    $cross++;

    if($tik[0] [2]==1 && $tik[1] [1]==1 && $tik[2] [0]==1)
    $circle++;
    if($tik[0] [2]==2 && $tik[1] [1]==2 && $tik[2] [0]==2)
    $cross++;
echo"circle - cross: $circle - $cross<br>";
if($circle>$cross) echo"wygrało kółko<br>";
else if($circle<$cross) echo"wygrało krzyżyk<br>";
else echo"Remis<br>";





    ?>
</body>
</html>