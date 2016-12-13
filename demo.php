<?php
$deep = mt_rand(1, 3);
$childCount = array();
$root = array();
$parent = &$root;

$childCount[0] = array(mt_rand(1, 3));
for ($i = 0; $i < $deep; $i++) {
	$x = $i + 1;
	$childCount[$x] = array();
	for ($j = 0; $j < count($childCount[$i]); $j++) {
		for ($n = 0; $n < $childCount[$i][$j]; $n++) {
			$childCount[$x][] = mt_rand(1, 3);
		}
	}
}

var_export($childCount);

$root = 
array(
	array(
		'value' => 0,
		'children' => null,
	);
);
