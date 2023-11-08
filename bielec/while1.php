<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona szablon</title>
	<meta charset="UTF-8">

</head>
<body>
<?php
    
    for ($n=1;$n<=10;$n++) {
        echo "$n";
        
    }
    echo "<br>";

    $i = 1;
    while($i<=10){
        
        echo "$i ";
        $i++;
    }
    echo"<br>";
    $i=1;
    while(true){
        echo "$i ";
        $i++;
        if($i>10) break;
    }
    echo"<br>";
    $j = 1;
    do {
        echo"$j ";
        $j++;
    } while($j<=10);
    echo"<br>";
 
	?>
</body>
</html>