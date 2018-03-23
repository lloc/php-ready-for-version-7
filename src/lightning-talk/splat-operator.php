<?php

function variadic_sum( int ... $args ) {
	return array_sum( $args );
}

// echoes 6
echo variadic_sum( 1, 2, 3 ), PHP_EOL;

$a = [ 1, 2, 3 ];
$b = [ 4, 5 ];

array_push( $a, ... $b );
// $a contains now [ 1, 2, 3, 4, 5 ]