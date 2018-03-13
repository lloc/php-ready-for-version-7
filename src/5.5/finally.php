<?php

// echoes What if I told you... I saw that coming!
try {
	throw new Exception( 'What if I told you...' );
} catch ( Exception $e ) {
	echo $e->getMessage(), PHP_EOL;
} finally {
	echo 'I saw that coming!', PHP_EOL;
}