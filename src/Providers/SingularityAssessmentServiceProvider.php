<?php

namespace AlmasAlright\SingularityAssessmentTest\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class SingularityAssessmentServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'team-members');
        Artisan::call('migrate', ['--path' => __DIR__ . '/../database/migrations']);
    }
}
