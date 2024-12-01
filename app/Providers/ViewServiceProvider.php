<?php
// app/Providers/ViewServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\CartComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the cart composer for the navbar view
        View::composer('*', CartComposer::class);
    }

    public function register()
    {
        //
    }
}
