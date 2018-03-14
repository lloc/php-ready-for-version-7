<?php

function foo( ?int $bar ): ?string {
	return $bar ? strval( $bar ) : null;
}

$baz = foo( 42 ); // $baz contains now '42'
$baz = foo( null ); // Baz is now null
