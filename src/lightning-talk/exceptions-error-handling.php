<?php

try {
	// Something throws an Exception or Error.
} catch ( Throwable $t ) {
	// will match only in PHP 7
} catch ( Exception $e ) {
	// will be reached in PHP 5
}