<?php namespace Wdmtech\Enviricons;

use Illuminate\Support\ServiceProvider;

class EnviriconsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish configs
        $this->publishes([
            __DIR__.'/config/enviricons.php' => config_path('enviricons.php')
        ], 'enviricons');

        // Publish views
        $this->publishes([
            __DIR__.'/views/enviricons.blade.php' => base_path('resources/views/vendor/wdmtech/enviricons/enviricons.blade.php'),
        ], 'enviricons');

        // Publish assets
        $this->publishes([
            __DIR__.'/public/' => public_path('/vendor/wdmtech/enviricons'),
        ], 'enviricons');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        //
    }

}
