<?php

require_once 'namespace-class.php';

use lloc\foo\Bar;

$bar = new Bar();
echo $bar->baz(), PHP_EOL; // echoes Hello World!
