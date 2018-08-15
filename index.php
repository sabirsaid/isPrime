<?php

function is_prime($p) {
 	$is_prime = false;
 	$r1 = $p%2;
	$r2 = $p%3;
	$r3 = $p%5;
	
	return (($r1 >= 1) && ($r2 >= 1) && ($r3 >= 1)) ||  in_array($p, [2,3,5]);
}
