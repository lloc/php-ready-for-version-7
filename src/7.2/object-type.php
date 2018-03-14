<?php

function foo( object $bar ): object {
	echo get_class( $bar ), PHP_EOL;

	return $bar;
}

// echoes stdClass
foo( new stdClass() );