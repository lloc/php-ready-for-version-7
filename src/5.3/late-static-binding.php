<?php

class Foo {

	public static function baz() {
		echo self::class, ' >> ', static::class, PHP_EOL;
	}

}

class Bar extends Foo { }

$foo = new Foo();
$foo->baz(); // echoes Foo >> Foo

$bar = new Bar();
$bar->baz(); // echoes Foo >> Bar
