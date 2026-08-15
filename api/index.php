<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Auto Loader
require __DIR__.'/../vendor/autoload.php';

// Redirect writeable storage paths to Vercel's /tmp directory
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

// Create required storage directories inside /tmp if they don't exist
$dirs = ['/tmp/storage/framework/views', '/tmp/storage/framework/cache', '/tmp/storage/framework/sessions', '/tmp/storage/logs'];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Handle the Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);