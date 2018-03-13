<?php

trait Foo {

	public function baz() {
		echo 'Hello World!', PHP_EOL;
	}
}

class Bar {

	use Foo;

}

// Class member access on instantiation is new feature too
( new Bar() )->baz();