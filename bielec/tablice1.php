<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tab[0] = 34;
    $tab[1] = 45;
    $tab[2] = 12;
    $tab[3] = 98;
    for($i=0; $i<=3; $i++){
        echo "$tab[$i]";        
    }
            echo"<br>";
    for($i=0; $i<=13; $i++){
        $kw[$i] = $i*$i;        
    }
    for($i=0; $i<=3; $i++){
        echo "$i --------->>> $kw[$i]<br />";        
    }
    $dl = count($kw);
    echo "rozmiar = $dl<br />";
        for($i=0; $i<count($kw); $i++){
        echo "$i --------->>> $kw[$i]<br />";        
    }


    ?>
</body>
</html>