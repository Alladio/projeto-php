<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
      /*Alladio -
      Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `password_resets` add index `password_resets_email_index`(`email`))
      */
      Schema::defaultStringLength(191);      
    }
}
