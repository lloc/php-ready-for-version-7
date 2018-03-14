<?php

class Foo {

	const BAR = 1;
	public const BAZ = 2;
	protected const FOOBAR = 3;
	private const FOOBAZ = 4;

	public function __toString() {
		return self::FOOBAZ . ' >> ' . self::FOOBAR;
	}
}
