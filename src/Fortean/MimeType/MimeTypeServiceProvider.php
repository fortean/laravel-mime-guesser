<?php namespace Fortean\MimeType;

/**
* @author Bruce Walter <walter@fortean.com>
* @copyright Copyright (c) 2014
* @license http://www.opensource.org/licenses/mit-license.html MIT License
*/

use Illuminate\Support\ServiceProvider;

class MimeTypeServiceProvider extends ServiceProvider {

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
		$this->package('fortean/laravel-mime-guesser');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register 'oauth-userdata'
		$this->app['mimetype'] = $this->app->share(function($app)
		{
			// Create MimeTypeGuesser instance
			$guesser = new MimeType();

			// Return MimeTypeGuesser instance
			return $guesser;
		});
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