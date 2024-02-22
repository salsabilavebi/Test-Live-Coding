<?php

function nilaiTerbesarKedua($arr) {

    sort($arr);
    
    $nilai_terbesar_kedua = $arr[count($arr) - 2];
    
    return $nilai_terbesar_kedua;
}


$array_integer = [8, 34, 7, 5, 3];


echo "Nilai terbesar kedua: " . nilaiTerbesarKedua($array_integer);
?>
