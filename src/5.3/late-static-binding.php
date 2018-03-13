<?php

class Foo {

	public static function baz() {
		return self::class . ' >> ' . static::class;
	}

}

class Bar extends Foo { }

$foo = new Foo();
echo $foo->baz(), PHP_EOL; // echoes Foo >> Foo

$bar = new Bar();
echo $bar->baz(), PHP_EOL; // echoes Foo >> Bar
