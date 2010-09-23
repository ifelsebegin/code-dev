<?php

function tableSQL($query, $array = false) {
	echo '<table>',"\n";
	if ($array) { //array colls
		$columns = implode(",", $array);
		$query = str_replace('%s',$columns,$query);
		echo "\t<tr>\n";
		foreach ($array as $value) {echo "\t\t",'<th>',$value,'</th>',"\n";}
		echo "\t</tr>\n";
	}
	$result = mysql_query($query);
	while($array = mysql_fetch_row($result)) {
		echo "\t<tr>\n";
		foreach ($array as $value) {echo "\t\t",'<td>',$value,'</td>',"\n";}
		echo "\t</tr>\n";
	}
	echo '</table>',"\n";
}

function parity($i,$val,$result) { //parity loop $i > 0
	$i++;
	if ((($i % $val) == 0)) {
		echo ($i == 0)?'':$result;
	}
}

function parityLoop($start,$current,$count,$true,$false = '') { //счетчик с отделителем 
	if ($current >= $start) { 
		if ($start >= 1 ) { 
			$m = $start -1; 
			$current = $current - $m; 
		} else { 
			$start++; 
			$current++; 
		} 
		$k = $current % $count; 
		if ($k > 0) {echo ' ';} else echo $true; 
	} 
} 

$st = 1; 

for ($i = $st; $i < 101; $i++) { 
echo $i; 
parityLoop($st,$i,5,'<br>'); 
}﻿



?>