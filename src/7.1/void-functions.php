<?php

function bar( ?int $baz ): void {
	if ( is_null( $baz ) ) {
		return;
	}

	echo $baz, PHP_EOL;
}

bar( 42 ); // echoes 42
bar( null );