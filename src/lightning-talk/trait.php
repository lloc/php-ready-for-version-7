<?php

namespace wctrn\realloc;

trait Logger {

	public function log_error( string $msg ) : bool {
		return error_log( $msg );
	}
}

class Categorie {

	use Logger;

	public function get_content() {
		$this->log_error(  'Not implemented' );
	}

}
