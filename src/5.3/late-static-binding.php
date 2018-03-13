<?php

class Foo {

	public static function a() {
		return new self();
	}

	public static function b() {
		return new static();
	}

}

class Bar extends Foo { }

// echoes Foo >> Bar
echo get_class( Bar::a() ), ' >> ', get_class( Bar::b() ), PHP_EOL;