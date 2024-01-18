<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Dan Switch</title>
</head>
<body>
    <?php
    $nilai = 41;
    if($nilai>80){
        echo "Lulus";
    } else if($nilai>60) {
        echo "Remedial";
    } else if ($nilai>40){
        echo "Remedial 2x";
    }else {
        echo "Tidak Lulus";
    }

    $hari = 1;
    switch ($hari) {
        case 1:
            echo "Hari Senin";
            break;
        case 2;
            echo "Hari Selasa";
            break;
        default:
            echo "Hari Tidak Valid";
            break;
    }
    ?>
</body>
</html>