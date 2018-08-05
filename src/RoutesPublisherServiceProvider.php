<?php
/**
 * Created by PhpStorm.
 * User: bm2ilabs
 * Date: 8/5/18
 * Time: 14:47
 */

namespace Themsaid\RoutesPublisher;

use Illuminate\Support\ServiceProvider;

class RoutesPublisherServiceProvider extends ServiceProvider
{
    public function register() {

    }

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RoutesPublisherCommand::class,
            ]);
        }
    }
}