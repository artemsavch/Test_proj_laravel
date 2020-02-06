<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\SaveStr', function () {

            return new SaveEloquentOrm();

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
