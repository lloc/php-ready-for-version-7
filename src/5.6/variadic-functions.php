<?php

namespace lloc\foo {
	const TWO = 2;

	function bar( ... $args ) {
		return array_sum( $args );
	}
}

namespace {
	// use function and use const is a new feature
	use const lloc\foo\TWO;
	use function lloc\foo\bar;

	// echoes 6
	echo bar( 1, TWO, 3 ), PHP_EOL;
}
