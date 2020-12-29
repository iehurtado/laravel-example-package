<?php

namespace Iehurtado\Comments;

use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider
{
    public function register() 
    {
        //
    }
    
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/public');
        
        if ($this->app->runningInConsole())
        {
            $this->publishes([
                __DIR__ . '/../config/comments.php' => config_path('comments.php'),
            ], 'config');
        }
    }
}
