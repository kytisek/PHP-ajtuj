<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona szablon</title>
	<meta charset="UTF-8">
</head>
<body>
	<p>Moja pierwsza strona internetowa.</p>
	<p>ąśżćźłó ĄŚŻĆŹŁÓŃ</p>
	<?php
    $n= rand(10,99);
    echo "Liczba = $n<br>";
    $is_prime = true;
    for ($i=2;$i<
    $n;$i++) {
        if($n%$i==0) {
            $is_prime = false;
            break;
        }
    }
if($is_prime==true){
    echo "Jest pierwsz";
} else {
    echo "Jest złożona";
}
	
echo "<br>";

	?>
</body>
</html>