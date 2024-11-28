<?php
namespace Rmax\Bladepress;

class Routes
{
	public static function init()
	{
		require get_stylesheet_directory() . '/routes.php';
	}

	public static function page($condition, $callback)
	{
		$callback();
	}
}
