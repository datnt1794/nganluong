<?php
namespace Ttsoft\Nganluong\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class BaseServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        \Ttsoft\NganLuong\Console\NganLuongCommand::class,
    ];
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
    ];
    /**
     * Boot the register provider.
     *
     * @return void
     */
    
    protected $registerProvider = [
        \Ttsoft\NganLuong\Providers\BaseRouteServiceProvider::class,
        \Ttsoft\NganLuong\Providers\BaseEventServiceProvider::class,
    ];
    /**
     * Boot the service provider.
     *
     * @return void
     */
    

    public function boot()
    {

        $this->registerAppServices();

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'nganluong');

        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'nganluong');

        $this->mergeConfigFrom(__DIR__.'/../../config/nganluong.php', 'nganluong');

        include __DIR__.'/../helpers.php';
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRouteMiddleware();
        $this->commands($this->commands);
    }

    /**
     * Register registerRouteMiddleware
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {
        foreach ($this->routeMiddleware as $key => $value) {
            app('router')->aliasMiddleware($key, $value);
        }
    }


    /**
     *
     * Register Service Provider
     *
     */
    protected function registerAppServices(){
        foreach ($this->registerProvider as $value) {
            $this->app->register($value);
        }
    }
    
}