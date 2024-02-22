<?php
$rambu_lalu_lintas = ['merah', 'kuning', 'hijau'];

function getRambulaluLintas(){

    global $rambu_lalu_lintas;
    static $index = 0;

    $nilai = $rambu_lalu_lintas[$index];

    $index = ($index + 1) % count($rambu_lalu_lintas);

    return $nilai;

}

echo getRambulaluLintas();
echo getRambulaluLintas();
?>