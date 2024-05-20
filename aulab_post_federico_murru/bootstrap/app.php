<?php

use App\Http\Middleware\UserIsAdmin;
use App\Http\Middleware\UserIsWriter;
use App\Http\Middleware\UserIsRevisor;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => UserIsAdmin::class,
            'revisor' => UserIsRevisor::class,
            'writer' => UserIsWriter::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
