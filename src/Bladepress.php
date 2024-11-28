<?php

namespace Rmax\Bladepress;

use Jenssegers\Blade\Blade;

/**
 * BladePress class
 */
class Bladepress
{
	/**
	 * Function to init cache dir
	 *
	 * @param string $cache
	 * @return void
	 */
	private static function initCacheDir(string $cache)
	{
		if (!file_exists($cache)) {
			mkdir($cache, 0777, true);
		}
	}

	/**
	 * Init BladePress
	 *
	 * @return Jenssegers\Blade\Blade
	 */
	private static function init()
	{
		$views = apply_filters('bladepress_views_dir', get_stylesheet_directory() . '/views');
		$cache = apply_filters('bladepress_cache_dir', wp_get_upload_dir()['basedir'] . '/cache');

		self::initCacheDir($cache);

		return new Blade($views, $cache);
	}

	/**
	 * Render template
	 *
	 * @param string $template
	 * @param array $args
	 * @return void
	 */
	public static function render(string $template, array $args)
	{
		$blade = self::init();
		echo $blade->make($template, $args)->render();
	}

	/**
	 * Compile template
	 *
	 * @param string $template
	 * @param array $args
	 * @return string
	 */
	public static function compile(string $template, array $args)
	{
		$blade = self::init();
		return $blade->make($template, $args)->render();
	}
}
