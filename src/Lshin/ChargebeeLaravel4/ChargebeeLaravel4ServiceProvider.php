<?php namespace Lshin\ChargebeeLaravel4;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use \Chargebee_Environment;

class ChargebeeLaravel4ServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('lshin/chargebee-laravel4');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->package('lshin/chargebee-laravel4');
        Chargebee_Environment::configure(
          $this->app['config']->get('chargebee-laravel4::config.site', null),
          $this->app['config']->get('chargebee-laravel4::config.api_key', null)
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
