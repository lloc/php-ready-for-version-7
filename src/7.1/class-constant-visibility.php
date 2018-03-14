<?php

class Foo {

	const BAR = 'x';
	public const BAZ = 'y';
	protected const FOOBAR = 2;
	private const FOOBAZ = 4;

	public function __toString() {
		return self::FOOBAZ . self::FOOBAR;
	}
}

// echoes 42
echo ( new Foo ), PHP_EOL;