<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 5;

    /*
    comment multi line
    */

    // comment one line

    //aritmatics
    echo $a+$b.'<br/>'; //pertambahan
    echo $a-$b.'<br/>'; //pengurangan
    echo $a/$b.'<br/>'; //pembagian
    echo $a*$b.'<br/>'; //kali (x)
    echo $a%$b.'<br/>'; //module

    // perbandingan
    echo 'a'.($a==$b).'<br/>'; 
    echo 'b'.($a!=$b).'<br/>';
    echo 'c'.($a>=$b).'<br/>';
    echo 'd'.($a<=$b).'<br/>';
    echo 'e'.($a>$b).'<br/>';
    echo 'f'.($a<$b).'<br/>';

    // logika
    echo 'g'.($a!=$b && $a>=$b).'<br/>';
    echo 'h'.($a!=$b || $a>=$b).'<br/>';
    echo 'i'.!($a!=$b && $a>=$b).'<br/>';

    //asignment operator
    $a = 5;
    $a += 5; //can use / or ++ or --
    echo $a.'<br/>'; 

    //conditional operator
    $a = 5;
    $b = 6;
    $c = $a > $b ? 7 : 8; //jika dia false dia akan mengeluarkan angka 8, jika true maka akan mengeluarkan angka 7
    echo $c.'<br/>';
    ?>
</body>
</html>