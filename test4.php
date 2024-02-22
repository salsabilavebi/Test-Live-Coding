<?php

function nilaiTerbesar($arr){
    sort($arr);

    $nilai_terbesar_kedua = $arr[count($arr) - 2];

    return $nilai_terbesar_kedua;

}

$array_integer = [9,23,4,2,5];

echo "Nilai Terbesar kedua adalah: ". nilaiTerbesar($array_integer);
?>
