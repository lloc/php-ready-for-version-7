<?php

// Sort an array of objects by name
usort( $arr, function ( $a, $b ) {
	return strcmp( $a->name, $b->name );
} );

function callback_function_name() {
	// do something
}

add_action( 'action_name', 'callback_function_name' );

add_action( 'action_name', function() {
	// do something
} );