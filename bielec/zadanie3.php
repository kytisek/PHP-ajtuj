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
echo"<h1> zadanie while()</h1>";
$os1 = rand(1, 4);
$os2 = rand(1, 4);
$os3 = rand(1, 4);
$os4 = rand(1, 4);
while($os1==$os2 or $os3==$os4  or $os1==$os3  or $os1==$os4  or $os2==$os3  or $os2==$os4) {
    $os1 = rand(1, 4);
    $os2 = rand(1, 4);
    $os3 = rand(1, 4);
    $os4 = rand(1, 4);
}
echo"$os1 - $os2<br>";    
echo"=====================================<br>";
echo"$os3 - $os4<br>";
	?>
</body>
</html>