<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/SplClassLoader.php';

$splClassLoader = new SplClassLoader('', __DIR__ . '/src');
$splClassLoader->register()
