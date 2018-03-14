<?php

$foo = isset( $_POST['foo'] ) ? $_POST['foo'] : 'bar';

$foo = $_POST['foo'] ?? 'bar';
