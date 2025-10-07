<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth('admin')->check();
        });

        $appFullName = config('app.name');
        $appShortName = substr($appFullName, 0, strpos($appFullName, " "));
        View::share(
            [
                'appName' => $appShortName,
                'appFullName' => $appFullName,
                'ogDescription' => $appFullName . ' — Unlock smarter investment opportunities with expert guidance and personalized strategies to grow and safeguard your wealth confidently.',
                'ogTitle' => 'Your reliable investment partner providing diversified solutions and dedicated support for investors of all experience levels — from beginners to seasoned professionals.',
                'metaDescription' => $appShortName . ' offers intelligent, accessible investment solutions crafted to support both new investors and those looking to optimize their portfolios.',
            ]
        );

        Schema::defaultStringLength(191);
    }
}
