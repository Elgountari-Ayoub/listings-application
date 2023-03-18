<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        //The line of code means: don't check the comming keys from the form when you want to change the database data
        //u will not need use 'protected $fillable = ['title', 'description', '....']'
        // Model::unguard();
    }
}
