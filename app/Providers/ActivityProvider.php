<?php

namespace App\Providers;

use App\Models\Score;
use App\Models\Activity;
use Illuminate\Support\ServiceProvider;

class ActivityProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('activity', function ()
        {
            $activities= Activity::all()->pluck('id');
            return $activities;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
