<?php

$arr = [ [ 42, 0b101010 ], [ 0x7B1, 1969 ] ];

// echoes 42 == 42 1969 == 1969
foreach ( $arr as [$a, $b] ) {
	echo $a, ' == ', $b, PHP_EOL;
}

$arr = [ [ 'a' => 42, 'b' => 0b101010 ], [ 'a' => 0x7B1, 'b' => 1969 ] ];

// echoes 42 == 42 1969 == 1969
foreach ( $arr as ['a' => $a, 'b' => $b] ) {
	echo $a, ' == ', $b, PHP_EOL;
}
