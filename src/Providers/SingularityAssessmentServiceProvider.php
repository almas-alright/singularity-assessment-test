<?php

namespace AlmasAlright\SingularityAssessmentTest\Providers;
use Closure;
use Illuminate\Support\ServiceProvider;

class SingularityAssessmentServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot(Closure $callback)
    {
        if ($this->app->runningInConsole()) {
            // Export the migration
            if (! class_exists('CreatePostsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_team_members_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_team_members_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }

    }
}
