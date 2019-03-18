<?php

namespace Jeje\Pay;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Foundation\Application as LaravelApplication;

class PayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot ()
    {
        $source = $source = realpath($raw = $this->getConfigFile()) ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $source => config_path('pay.php')
            ], 'pay');

        } else if ($this->app instanceof LumenApplication) {
            $this->app->configure('pay');
        }


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register ()
    {
        $source = $source = realpath($raw = $this->getConfigFile()) ?: $raw;
        $this->mergeConfigFrom($source, 'pay');

        $this->app->singleton('pay', function () {
            return new Pay();
        });
    }

    /**
     * @return string
     */
    protected function getConfigFile ()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'pay.php';
    }
}