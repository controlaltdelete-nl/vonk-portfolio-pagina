<?php

if (!array_key_exists('REQUEST_URI', $_SERVER)) {
    throw new \Exception('No request uri found, is this CLI?');
}

$path = ltrim($_SERVER['REQUEST_URI'], '/');

if ($path == '') {
    $path = 'index';
}

$staticPath = __DIR__ . '/' . $path;
if (str_starts_with($path, 'assets') && file_exists($staticPath)) {
    $mimeType = mime_content_type($staticPath);
    header('Content-Type: ' . $mimeType);
    readfile($staticPath);
    exit;
}

if (!file_exists(__DIR__ . '/pages/' . $path . '.php')) {
    throw new \Exception('404: Page not found');
}

require 'pages/' . $path . '.php';