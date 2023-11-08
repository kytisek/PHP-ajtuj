<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prac = array("Jan"=>"kierownik","Tomasz"=>"Elektryk","Mirek"=>"kierowca","Ala"=>"sekretarka","Ola"=>"Gwiazda","Robert"=>"kierowca");
    echo"<table border=1>";
    echo"<tr bgcolor=yellow>
    <td>L.P.</td>
    <td>Imię</td>
    <td>Stanowisko</td>
    </tr>";
    $nr = 0;
    foreach($prac as $kl=>$wart){

        echo "$kl - $wart<br>";
        echo"<td> = $prac";
    }
    echo "</table>";
            ?>
</body>
</html>