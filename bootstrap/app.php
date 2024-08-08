<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\LanguageCookieMiddleware;
use App\Http\Middleware\LanguageHeaderMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/main.php'));

            Route::middleware(['web', 'auth', 'verified'])
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware('web')
                ->group(base_path('routes/auth.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append([
            LanguageHeaderMiddleware::class,
            LanguageCookieMiddleware::class,
        ]);
        $middleware->encryptCookies(except: [
            'language',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
