<?php

function karakterTerbanyak($kata) {
    
    $kemunculan = [];
    
  
    for ($i = 0; $i < strlen($kata); $i++) {
        $karakter = $kata[$i];
        
        
        if (isset($kemunculan[$karakter])) {
            $kemunculan[$karakter]++;
        } else {
            
            $kemunculan[$karakter] = 1;
        }
    }
    
   
    $karakter_terbanyak = '';
    $max_kemunculan = 0;
    foreach ($kemunculan as $karakter => $jumlah) {
        if ($jumlah > $max_kemunculan) {
            $karakter_terbanyak = $karakter;
            $max_kemunculan = $jumlah;
        }
    }
    

    return "$karakter_terbanyak $max_kemunculan" . "x";
}


echo karakterTerbanyak('salsabila') . "\n"; 
echo karakterTerbanyak('strawberry') . "\n"; 
?>
