<?php

abstract class Foo {

	abstract function baz( int $foobar );

}

abstract class Bar extends Foo {

	// expected type of foobar is still int
	abstract function baz( $foobar ) : int;

}
