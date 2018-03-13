<?php

$foo = function( $name ) {
	// new feature shorthand ternary $name ? $name : 'World'
	return sprintf("Hello %s!", $name ?: 'World' );
};

// echoes Hello Berlin! >> Hello World!
echo $foo( 'Berlin' ), ' >> ', $foo( '' ), PHP_EOL;