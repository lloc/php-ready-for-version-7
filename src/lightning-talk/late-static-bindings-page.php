<?php

namespace wctrn\realloc;

require_once 'late-static-bindings-post.php';

class Page extends Post {

	public function get_content() {
		return 'Hello Turin!';
	}

}

echo Page::init()->get_content(), PHP_EOL;
