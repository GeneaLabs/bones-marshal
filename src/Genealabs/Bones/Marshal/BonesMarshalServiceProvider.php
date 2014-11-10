<?php namespace Genealabs\Bones\Marshal;

use Illuminate\Support\ServiceProvider;

class BonesMarshalServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function boot()
    {
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->registerCommandBus();
        $this->registerCommandTranslator();
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
            'GeneaLabs\Bones\Marshal\Commands\CommandBus',
            'GeneaLabs\Bones\Marshal\Commands\CommandTranslator',
        ];
	}

    private function registerCommandBus()
    {
        $this->app->bindShared('GeneaLabs\Bones\Marshal\Commands\CommandBus', function () {
            return $this->app->make('GeneaLabs\Bones\Marshal\Commands\ValidationCommandBus');
        });
    }

    private function registerCommandTranslator()
    {
        $this->app->bindShared('GeneaLabs\Bones\Marshal\Commands\CommandTranslator', function () {
            return 'GeneaLabs\Bones\Marshal\Commands\BaseCommandTranslator';
        });
    }

}
