<?php

$arr = [ [ 42, 0b101010 ], [ 0x7B1, 1969 ] ];

// echoes 42 == 42 1969 == 1969
foreach ( $arr as list( $a, $b ) ) {
	echo $a, ' == ', $b, PHP_EOL;
}
