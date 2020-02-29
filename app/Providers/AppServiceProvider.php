<?php

namespace App\Providers;
session_start([
    'cookie_lifetime' => 86400,
]);
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
        $this->composer();
    }

    public function composer(){
        view()->share($_SESSION);
    }
}
