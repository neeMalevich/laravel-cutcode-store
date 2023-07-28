<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        Model::preventLazyLoading( !app()->isProduction());
        Model::preventSilentlyDiscardingAttributes( !app()->isProduction());
        // Заброс больше 500 милисекунд
        DB::whenQueryingForLongerThan(500, function (Connection $connection){

        });
    }
}
