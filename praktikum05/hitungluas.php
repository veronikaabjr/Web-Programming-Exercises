<?php
    $n = $_GET['n'];
    $d = $_GET['d'];
    $t = $_GET['t'];

    $r = $d/2;
    $phi = 3.14;
    $luas = 2 * $phi * $r * ($r + $t);

    echo"Luas tabung $n dengan diameter $d dan tinggi $t adalah $luas satuan luas"
?>