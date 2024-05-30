<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Import your custom middleware
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\MasyarakatAuth;

// Create the application instance
$app = Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register your custom middleware
        $middleware->appendToGroup('admin.auth', [
            AdminAuth::class,
        ]);
        $middleware->appendToGroup('masyarakat.auth', [
            MasyarakatAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();

$app->singleton('config', function ($app) {
    return new Illuminate\Config\Repository();
});

$app->register(\Barryvdh\DomPDF\ServiceProvider::class);

// Return the application instance
return $app;
