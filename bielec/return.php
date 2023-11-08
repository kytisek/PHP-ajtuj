<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function power($podst,$wykl){
        $pot = 1;
        for($i=1;$i<=$wykl;$i++){
            $pot = $pot*$podst;
        }
        return $pot;
        
    }
$p =rand(1,5);
$w =rand(1,5);
    echo "$p do pot. $w wynosi".power($p,$w)."<br>";
?>
</body>
</html>