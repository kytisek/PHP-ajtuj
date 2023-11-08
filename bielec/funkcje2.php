<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function silnia($n) {
        $s = 1;
        for($i=1;$i<=$n;$i++){
            $s=$s*$i;

        }


        echo"<p>$n! = $s </p>";
    }
    $a = 10;
    silnia($a);
    ?>
</body>
</html>