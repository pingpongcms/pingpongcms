<?php

use App\Option;

if ( ! function_exists('option'))
{
	/**
	 * Get a value option from database by given option key.
	 * 
	 * @param  string  $key
	 * @param  null    $default
	 * @return mixed
	 */
	function option($key, $default = null)
	{
		try
		{
			if ( ! app()->isLocal())
			{
				return Option::remember($key, config('cms.option.lifetime'), $default);
			}

			return Option::value($key, $default);
		}
		catch (Exception $e)
		{
			return value($default);
		}
	}
}