<?php

/**
 * Vercel Serverless Entry Point for Laravel
 */

// 1. Prepare ephemeral /tmp storage directories BEFORE Laravel boots
$storagePath = '/tmp/storage';
$directories = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Load Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 3. Bootstrap Laravel Application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 4. Set storage path to created /tmp directory
$app->useStoragePath($storagePath);

// 5. Handle the HTTP Request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);