<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona szablon</title>
	<meta charset="UTF-8">
    <style>
        .reds{
            color: red;
            background-color:yellow;
        }
        .blues{
            color: blue;
            background-color: green;
        }
    </style>
</head>
<body>

	<?php
    echo"<h3>Trójkąt</h3><br/ >";
$a=rand(2, 10);
$b=rand(2, 10);
$c=rand(2, 10);
echo "a=$a, b=$b, c=$c <br />";
$is_triangle = true;
if($a+$b>=$c and $a+$c>=$b and $b+$c>=$c){
    echo"To jest trójkąt<br />";
}else{
    echo"To nie jest trójkąt<br />";
    $is_triangle = false;
}
echo"==============================<br />";
if ($is_triangle){
    if($a=$b and $b=$c and $a=$c){
        echo"To jest trójkąt równoboczny<br />";

    } else if($a=$b and $b<$c and $a<$c){
        echo"To jest trójkąt równoraminny<br />";

    } else{
        echo"To jest trójkąt różnoboczny<br />";
    }
    
}
echo"==============================<br />";
if ($is_triangle){
    if($b*$b-4*$a*$b){
        echo"To jest trójkąt prostokątny<br />";

    } else{
        echo"To nie jest trójkąt różnoboczny<br />";
    }
    
}

	?>
</body>
</html>