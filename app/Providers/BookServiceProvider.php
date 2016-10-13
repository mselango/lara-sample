<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Validator;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('check_number', function($attribute, $value, $parameters) {
            if(!is_int($value)){
                return FALSE;
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
