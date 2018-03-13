<?php

require_once 'variadic-functions.php';

use const lloc\foo\TWO;
use function lloc\foo\bar;

// echoes 6
echo bar( 1, TWO, 3 ), PHP_EOL;
