<?php

namespace wctrn\realloc;

abstract class Option {

	abstract function get( int $id );

}

abstract class Transient extends Option {

	// expected type of $id is still int
	abstract function baz( $id ) : Transient;

}
