<?php include('templates/bt_top.php'); ?>

<style type="text/css">
	th {background: #efefef}
	td, th {border: 1px solid #c6c6c6; padding: 3px 5px;}
</style>

<?php

$fruits = array (
	'id',
	'name',
	'fame',
	'age'
);

for ($i=0; $i <= 9; $i++) { 
	$tes[$i] = $i;
}

$i = 0;
foreach ($tes as $value) {
	echo "\t\t",'<span>',$value,'</span>',"\n";
	parity($i,1,'<br>');
	$i++;
}

$query = 'SELECT %s FROM data ORDER BY id';

/* id, name, fame, age */
tableSQL($query,$fruits);

tableSQL('SELECT id, name, age, fame FROM data ORDER BY id');

?>
<?php include('templates/bt_bottom.php'); ?>