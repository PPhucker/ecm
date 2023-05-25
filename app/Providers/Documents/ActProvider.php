<?php

namespace App\Providers\Documents;

use App\Models\Documents\Acts\Act;
use App\Observers\Documents\Acts\ActObserver;
use Illuminate\Support\ServiceProvider;

class ActProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Act::observe(ActObserver::class);
    }
}
