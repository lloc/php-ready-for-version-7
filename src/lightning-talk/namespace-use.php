<?php

require_once 'namespace-class.php';

// Namespace: Using
echo ( new \wctrn\realloc\Post() )->get_content(), PHP_EOL;

// Namespaces: Importing
use \wctrn\realloc\Post;
echo ( new Post() )->get_content(), PHP_EOL;

// Namespaces: Aliasing
use \wctrn\realloc\Post as Talk;
echo ( new Talk() )->get_content(), PHP_EOL;
