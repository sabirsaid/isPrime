<?php

function is_prime($p) {
	return ($p > 1) &&  (($p%2 >= 1) && ($p%3 >= 1) && ($p%5 >= 1)) ||  in_array($p, [2,3,5]);
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
