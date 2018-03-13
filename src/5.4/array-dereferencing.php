<?php

function foo() {
	return [
		'bar' => 42,
		'baz' => 0b101010, // binary format is a new feature too
	];
}

echo foo()['bar'], PHP_EOL;