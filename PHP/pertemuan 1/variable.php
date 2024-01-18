<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel PHP & Constanta</title>
</head>
<body>
    <?php
    $panjang = 10; //var int
    echo $panjang.'<br/>';
    $panjang = 10.5; //var double
    echo $panjang.'<br/>';
    $panjang = "Hello"; //var string
    echo $panjang.'<br/>';
    $panjang = true; //var boolean
    echo $panjang.'<br/>';

    //Constanta canot changes
    define("PHI", 3.144);
    echo PHI;
    ?>
</body>
</html>