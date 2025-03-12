<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected function mapApiRoutes()
    {
        Route::middleware('api')
            ->prefix('api')  // <-- This ensures API routes start with 'api/'
            ->group(base_path('routes/api.php'));
    }
}
