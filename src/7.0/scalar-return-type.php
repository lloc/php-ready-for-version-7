<?php

declare( strict_types = 1 );

function foo( string $bar, int ... $baz ): string {
	return sprintf( '%s == %d', $bar, array_sum( $baz ) );
}

// echoes Sum of primes < 10 == 17
echo foo( 'Sum of primes < 10', 2, 3, 5, 7 ), PHP_EOL;