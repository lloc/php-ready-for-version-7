<?php

namespace wctrn\realloc;

class Post {

	public static function init() {
		return new static();
	}

	public function get_content() {
		return 'Hello WordCamp!';
	}
}

echo Post::init()->get_content(), PHP_EOL;

