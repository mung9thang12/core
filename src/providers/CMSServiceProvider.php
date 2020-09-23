<?php
namespace Mung9thang12\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerHelpers();
    }
    public function boot()
    {
        //register provider
        foreach (config('cms.providers') as $provider) {
            $this->app->register($provider);
        }
    }

    /* ======LOAD HELPER====== */
    final private function registerHelpers()
    {
        /* load helper */
        if (file_exists($file_helper = __DIR__ . '/../helpers.php')) {
            require_once $file_helper;
        }

        //publish config
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/' => config_path()], 'config');
        }
        //merge config
        foreach (glob( __DIR__ . '/../config/*.php') as $config) {
            $this->mergeConfigFrom($config, getConfigName($config));
        }
    }
}
