<?php

namespace AlmasAlright\SingularityAssessmentTest\Providers;
use Illuminate\Support\ServiceProvider;

class SingularityAssessmentServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'team-members');
    }
}
