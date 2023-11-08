<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Funkcje własne</p>
    <?php
    function pisz() {
        echo"<h2>Hello Java</h2>";
    }
    function pisz2($napis) {
        echo"<h2>Hello $napis</h2>";
    }
    function PiszAdv($napis, $kol) {
        echo"<h2 style=color:$kol;>Hello $napis</h2>";
    }
    pisz();
    pisz2("Kielce");
    $txt = "Radom";
    pisz2($txt);
    PiszAdv("Barbara","red");
    PiszAdv("Roman","blue");


    /////////////////////////////////////////////////////////
    function rect($a, $b) {
        echo"<p>a = $a</p>";
        echo"<p>a = $b</p>";
        echo"<p>Pole = ".$a*$b."</p>";
        echo"<p>Obw = ".(2*$a+2*$b)."</p>";
        if ($a==$b){
            echo"<p>To jest kwadrat</p>";
        } else{
            echo"<p>To nie jest kwadrat</p>";
        }
    }
    function triangle($a, $b, $c) {
        echo"<p>a = $a</p>";
        echo"<p>b = $b</p>";
        echo"<p>c = $c</p>";

        if ($a+$b>$c && $a+$c>$b && $b+$c>$a){
            echo"<p>To jest trójką</p>";
            $p = ($a+$b+$c)/2.0;
            $pole = sqrt($p*($p-$a)*($p-$b)*($p-$c));
            $pole = round($pole,2);
            echo"<p> Pole = $pole</p>";
        } else{
            echo"<p>To nie jest trójkąt</p>";
        }
    }
    $bok1 = rand(5,15);
    $bok2 = rand(5,15);
    $bok3 = rand(5,15);
    rect($bok1,$bok2);
    triangle($bok1,$bok2,$bok3);
    
    ?>
</body>
</html>