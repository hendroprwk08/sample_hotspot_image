<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>
<body>
    <?php
    $arrHS = [
        [ "rect", "285, 35, 430, 65", "https://www.detik.com/" ], #gambar atas
        [ "rect", "170, 100, 260, 225", "http://facebook.com" ], #gambar kiri
        [ "rect", "450, 100, 545, 225", "http://twitter.com" ], #gambar kanan
        [ "rect", "220, 230, 480, 360", "http://yahoo.com" ], #banner booth
        [ "rect", "270, 190, 320, 225", "http://google.com" ], #stand-table banner
        [ "rect", "295, 75, 420, 145", "http://apple.com" ] #tv
    ];

    echo '
    <img src="img/booth.jpeg" class="center" usemap="#img_map" width="700" height="400">
    <map name="img_map">';

    for($i = 0; $i < count($arrHS); $i++){
        echo '<area shape="'. $arrHS[$i][0] .'" coords="'. $arrHS[$i][1] .'" alt="Computer" href="'. $arrHS[$i][2] .'">';
    }

    echo '</map>';
    ?>
</body>
</html>