<?php

function foo() {
	return [
		'bar' => 42,
		'baz' => 052,
	];
}

echo foo()['bar'], PHP_EOL;