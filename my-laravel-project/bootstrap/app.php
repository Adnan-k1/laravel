<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application(
    $_ENV['APP_ENV'] ?? 'production',
    $_ENV['APP_DEBUG'] ?? false
);

// Bind important interfaces into the container
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Exceptions\Handler::class,
    App\Exceptions\Handler::class
);

// Return the application instance
return $app;