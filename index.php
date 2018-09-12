<?php

function is_prime($p) {
	if ($p < 0)
		$p = -$p;
	return ($p > 1) &&  (($p%2 >= 1) && ($p%3 >= 1) && ($p%5 >= 1)) ||  in_array($p, [2,3,5]);
}


function getPrimes($n1, $n2) {
    $nmbPrimes = [];
    for($i=$n1;$i<=$n2;$i++){
        if(is_prime($i)){
            $nmbPrimes [] = $i;
        }
    }
    return $nmbPrimes;
}
