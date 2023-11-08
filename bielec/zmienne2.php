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

    $n = rand(2, 5);
    echo $n."<br />";
    $n = rand(3, 5);
     if($n==3){
        echo "<p><font color=green>Wygrałeś</font></p>";
     } else {
        echo "<p style=\"color:red;font-size:22px\">Przegrałeś</p>";
     }
     $janek = rand(1, 3);
     $mirek = rand(1, 3);
     if($janek > $mirek) {
        echo "Mirek win<br />";
     } else if($janek < $mirek){
        echo "Janek win<br />";
     } else if($janek = $mirek){
        echo "Remis<br />";
     }


    ?>
    
</body>
</html>