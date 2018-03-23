<?php

function xrange( $start, $limit, $step = 1 ) {
	for ( $i = $start; $i <= $limit; $i += $step ) {
		yield $i;
	}
}

/*
 * An array is never created or returned
 */
foreach ( xrange( 1, 9, 2 ) as $i ) {
	echo $i, PHP_EOL;
}
