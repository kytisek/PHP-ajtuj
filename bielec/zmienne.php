<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona szablon</title>
</head>
<body>
    <p>Moja pierwsza strona internetowa.</p>
    <p>ąśźćżłó ĄŚŻĆŹŁÓŃ</p>
    <?php
    echo "Hello Wrld!";
    $n = 7; //7
    $n++; //8 tu jest plus 1
    $n--; //7 tu jest minus 1
    $n+=9; //16 tu jest plus 9
    $n = $n+9; //25 tu tez plus 9
    $n *=3; //75 tu jest razy 3
    $n/2; //37 podzielenie
    echo $n."<br />";
    $txt1 = "Ala ";
    $txt2 = "ma";
    $txt3 = $txt1.$txt2;
    echo $txt3.="<br />";
    $txt3.=" kota<br />";
    echo $txt3;



    ?>
    
</body>
</html>