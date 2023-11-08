<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $napis = "Jan Kowalski";
    $nr = strpos($napis,"owa");
    echo $nr."<br>";
    echo "numer = ".strpos($napis, "ona")."<br>";


    $napis2 = strtolower($napis);
    echo "nowy napis = $napis2 <br>";

    $napis3 = strtoupper($napis);
    echo "nowy napis = $napis3 <br>";

    $rozmiar = strlen($napis);
    echo "długość = $rozmiar <br>";

    echo "Zadanie 1:<br>";
    for($i=0;$i<$rozmiar;$i++){
        echo $napis[$i]."<br>";
    }

    echo "Zadanie 2:<br>";
    for($i=$rozmiar-1;$i>=0;$i--){
        echo $napis[$i];
    }
    echo "Zadanie 3:<br>";

    $napis = "kajak";
    $napis2 = strrev($napis);
    if($napis==$napis2)
    echo "To jest palingrom<br>";
else
echo "To nie jest palingrom<br>";

    echo "Zadanie 4:<br>";
    $napis = "JaneK";
    $d = strlen($napis);
    for($i=0;$i < $d;$i++){
        //echo $napis[$i];
        if($napis[$i]==strtolower($napis[$i])){
            echo strtoupper($napis[$i]);
        }else {
            echo strtolower($napis[$i]);
        }

    }





    ?>
</body>
</html>