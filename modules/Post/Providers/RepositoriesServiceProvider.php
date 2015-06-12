<?php namespace Pingpong\Cms\Post\Providers;

use Illuminate\Support\ServiceProvider;
use Pingpong\Cms\Post\Repositories\EloquentPostRepository;
use Pingpong\Cms\Post\Repositories\PostRepository;

class RepositoriesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(PostRepository::class, EloquentPostRepository::class);
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
