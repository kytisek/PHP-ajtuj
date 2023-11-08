<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $zm = 23.49;
    echo "zm = $zm<br/>";
    $zm2 = round($zm);                       //zaokrąglanie
    echo "zm = $zm2<br/>";
    $zm2 = floor($zm);                      //zaokrąglnainie do dołu
    echo "zm = $zm2<br/>";
    $zm2 = ceil($zm);                        //kijwie
    echo "zm = $zm2<br/>";
    $zm = -5;
    $zm2 = abs($zm);
    echo "abs = $zm2<br/>";
         //sqrt()
    $wykl = 1.6;
    $pods = 2.1;
    $potega = pow($pods,$wykl);
    echo "potega = $potega<br/ >";
    $iloraz = 25/11;
    $zm2 = round($iloraz,3);
    echo "iloraz = $zm2<br/ >";
    $maks = max(2.5,1.7, $zm2,$iloraz);
    echo "max = $maks<br/ >";









    ?>
    
</body>
</html>