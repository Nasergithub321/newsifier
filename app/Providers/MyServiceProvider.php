<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('UserService', function () {
            return new UserService();
        });
        App::bind('ImageService', function () {
            return new ImageService();
        });
    }


    public function provides()
    {
        return [
            'UserService',
            'ImageService'
        ];
    }
}
