<?php

namespace wctrn\realloc;

class Post {

	protected $content;

	public function get_content() : string {
		return $this->content;
	}
}
