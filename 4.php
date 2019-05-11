<?php

function cetak_gambar()
{
	$bariskolom = 10;
$data_1 = 0;
$array = ['P','R','O','G','R','A','M','M','E','R'];
$data_2 = $bariskolom-1;
for($i = 0; $i < $bariskolom ; $i++)
{
	for($j = 0; $j < $bariskolom ; $j++)
	{
		if($i == $j || ($i == $data_1 && $j == $data_2))
		{
			 echo $array[$j]." ";
		}else
		{
			echo "= ";
		}
		
		
	}
	$data_2--;
	$data_1++;
	echo "<br>";
}
}

cetak_gambar();


?>