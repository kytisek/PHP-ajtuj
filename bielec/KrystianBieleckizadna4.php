<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$miesz = array(
"Tomek"=>"Kielce",
"Jakub"=>"Radom",
"Mojżesz"=>"Kielce",
"Robek"=>"Radom",
"Kuba"=>"Kielce",
"Bartłomiej"=>"Radom",
);
foreach($miesz as $im=>$m) {
    echo "$im - $m <br>";
}
$kie=0;
$ra=0;
foreach ($miesz as $miast) {
    if ($miast == 'Kielce') {
        $kie++;
    } else {
        $ra++;
    }
}
echo "$kie <br>";
echo "$ra <br>";
if ($kie > $ra) {
    echo "Najwięcej osób mieszka w Kielcach <br> <img src='kielce.png' >";
} elseif ($kie < $ra) {
    echo "Najwięcej osób mieszka w Radomiu <br> <img src='radom.png' >";
} else {
    echo "Liczba osób mieszka w Kielcach i Radomiu jest taka sama <br><img src='kie=rad.png' >";
}
?>
</body>
</html>