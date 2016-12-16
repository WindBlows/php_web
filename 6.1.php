<?php
function add(&$number) 
{
	$number++; 
	return $number;
}
$number = 11;
add($number);
echo $number;