<?php

function foo( $value, $default = 0 ) {
	return $value ? $value : $default;
}

function bar( $value, $default = 0 ) {
	return $value ?: $default;
}

// echoes 42 >> 0
echo bar( 42 ), ' >> ', bar( null ), PHP_EOL;