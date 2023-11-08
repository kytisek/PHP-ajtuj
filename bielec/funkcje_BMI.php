<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h1>BMI</h1>";
function bmi($waga, $wzrost){
    echo"<h2>waga = $waga</h2>";
    echo"<h2>wzrost = $wzrost</h2>";
    $bmi = $waga/($wzrost*$wzrost);
    $bmi = round($bmi,2);
    echo"<h2>BMI = $bmi</h2>";
    if($bmi<16){
        echo"<div style='width:150px;height:50px;background:#ff0000;'>wygłodzenie</div>";
        echo"<img src='download.jpg'/>";
        }else if($bmi>16 && $bmi<16.99){
        echo"<div style='width:150px;height:50px;background:#ffffcc;'>wychudzenie</div>";
        echo"<img src='7.jpg'/>";
        }else if($bmi>17 && $bmi<18.49){
            echo"<div style='width:200px;height:70px;background:#ff9900;'>niedowaga</div>";
            echo"<img src='4.jpg'/>";
        }else if($bmi>18.5 && $bmi<24.99){
            echo"<div style='width:200px;height:70px;background:#66ff66;'>waga prawidłowa</div>";
            echo"<img src='3.jpg'/>";
        }else if($bmi>25.0 && $bmi<29.99){
            echo"<div style='width:200px;height:70px;background:#66b3ff	;'>nadwaga</div>";
            echo"<img src='6.jpg'/>";
        }else if($bmi>30.0 && $bmi<34.99){
            echo"<div style='width:200px;height:70px;background:#6666ff;'>I stopień otyłości</div>";
            echo"<img src='5.jpg'/>";
        }else if($bmi>35.0 && $bmi<39.99){
            echo"<div style='width:200px;height:70px;background:#b3b3b3;'>II stopień otyłości</div>";
            echo"<img src='2.jpg'/>";
        }else if($bmi>40.0){
            echo"<div style='width:200px;height:70px;background:#4d0000;'>otyłość skrajna</div>";
            echo"<img src='otyła.jpg'/>";
        }
}

//$waga = <50,130>;
//$wzrost = <1.5, 2.15>;
$wag = rand(50,130);
$wzr = rand(150,215)/100.0;
//$bmi(67,1.55);
bmi($wag, $wzr);
?>

    
</body>
</html>