<?php
/**
 * Binary search
 * 
 * @param  array, int
 * @return boolean
 */
function find($array, $x) {
	$mid = floor(count($array)/2);
	if ($array[$mid] === $x) { // integer found
		return true;
	} elseif (count($array) === 1) { // integer not found when only one element left
		return false;
	} elseif ($array[$mid] > $x) { // recursive function with lower array
		return find(array_slice($array, 0, count($array)/2), $x);
	} else  { // recursive function with upper array
		return find(array_slice($array, count($array)/2), $x);
	}
}

?>