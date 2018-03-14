<?php

interface Foo {

	public function bar( array $foobar ): Bar;

}

class Bar { }

class Baz implements Foo {

	public function bar( $foobar ): Bar { }

}
