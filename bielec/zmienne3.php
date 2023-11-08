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
    echo "Hello Wrld!<br />";
    $a = rand(1, 10);
    $b = rand(-10, 10);
    $c = rand(-10, 10);
    echo "a=".$a."<br>b=".$b."<br>c=".$c."<br>";
    $delta = $b*$b-4*$a*$c;
    if ($delta>0)
  {
    $x1=(-$b-sqrt($delta))/2/$a;
    $x2=(-$b+sqrt($delta))/2/$a;
    echo("Równanie ma dwa pierwiastki"."<br>");
    echo("x1=".$x1."<br>");
    echo("x2=".$x2."<br>");
  }
  else
  {
    if ($delta==0)
    {
      $x1=-$b/(2*$a);
      echo("Równanie ma jeden pierwiastek"."<br>");
      echo("x1=".$x1."<br>");
    }
    else
      echo("Równanie nie ma pierwiastków rzeczywistych");
  }
    ?>
    
</body>
</html>