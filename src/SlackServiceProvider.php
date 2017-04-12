<?php

namespace MrPaulPhan\Slack;

use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // publish  package's configuration file
        $this->publishes([
          __DIR__.'/config/slack.php' => config_path('slack.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('alert-class', function () {
          return new Alert();
        });

        //  $this->mergeConfigFrom(__DIR__.'/config/service.php', 'slack');

//        $this->app->make('MrPaulPhan\Slack\SlackController');
      //  $this->app->make('MrPaulPhan\Slack\Alert');
    }
}
