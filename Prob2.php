<?php 
/**
Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
0,1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
**/

$terms = 100;

$current = 0;
$next = 1;


$sum = 0;
for ( $i = 1; $i < $terms; $i++) {
	 
	 $fibo = $current + $next;
	 
	 $r = (int) $fibo;

	 if ($r % 2 == 0 && $r <= 4000000 && $r > 0 ) {
		$sum += $r;	
		
	 }
	 
    $current = $next;
    $next = $fibo;
}
echo  $sum. "\n";










 ?>
