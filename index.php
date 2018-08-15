<?php

function is_prime($p) {
 	$is_prime = false;
 	$r1 = $p%2;
	$r2 = $p%3;
	$r3 = $p%5;

	if ( ($p > 1) &&  (($r1 >= 1) && ($r2 >= 1) && ($r3 >= 1)) ||  in_array($p, [2,3,5]) ) {
	 	$is_prime = true;
	}

	return $is_prime;
}

function getPrimes($n1, $n2) {
    $negatif = false;
    $nmbPrimes = [];
    if($n2<0){
        $negatif = true;
        $n2 = -$n2;
    }
    if($n1<0){
        $negatif = true;
        $n1 = -$n1;
    }
	for($i=$n1;$i<=$n2;$i++){

        if(is_prime($i)){
            if($negatif){
            	$nmbPrimes [] = "-".$i;
            }
            $nmbPrimes [] = $i;
        }
    }

    return $nmbPrimes;
}
