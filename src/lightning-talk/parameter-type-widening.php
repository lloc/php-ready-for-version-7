<?php

interface Thing {

	public function the_content( string $content ) : void;

}

class Tag implements Thing {

	public function the_content( $content ): void {
		print_r( $content );
	}

}

( new Tag () )->the_content( [ 'a', 'b' ] );