<?php

function word_limiter($words, $limit = 20)
{
	$str_array = explode(' ', $words);
	$output = '';
	for($i=0; $i < $limit; $i++)
	{
		$output .= $str_array[$i];
		$output .= ' ';
	}
	return $output;
}


function tgl_indonesia($date)
{

$Bulan= array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", 
				"Agustus", "September", "Oktober", "November", "Desember");

$tahun=substr($date, 0, 4);
$bulan=substr($date, 5, 2);
$tgl=substr($date, 8, 2);

$result=$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ";
return $result;
}


?>