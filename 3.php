<?php

function cetak($jumlah) {
	$random = "";
    for ($j=0; $j < $jumlah; $j++) { 
    	$karakter = '0123456789abcdefghijklmnopqrstuvwxyz';
    	$panjangnya = strlen($karakter);
    	
        $kata_acak = '';
    	for ($i = 0; $i < 32; $i++) {
        	$kata_acak .= $karakter[rand(0, $panjangnya-1)];
    	}

        if (preg_match("/^".$kata_acak."/", $acak))
        {
          continue;  
        }
        else
        {
            $random = $random."<br>".$kata_acak;
        }
    	
    }
    return $acak;
}

echo cetak(2);
?>