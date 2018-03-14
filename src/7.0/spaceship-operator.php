<?php

$foo = 42;
$bar = 1969;

echo $foo <=> $foo, PHP_EOL; // echoes 0
echo $foo <=> $bar, PHP_EOL; // echoes -1
echo $bar <=> $foo, PHP_EOL; // echoes 1