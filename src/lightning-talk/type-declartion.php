<?php

namespace wctrn\realloc;

class Post {

	protected $content;

	public function set_content( string $content ) {
		$this->content = $content;
	}
}
