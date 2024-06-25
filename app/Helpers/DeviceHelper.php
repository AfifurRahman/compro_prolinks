<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Auth;
use Jenssegers\Agent\Agent;

class DeviceHelper
{
	public static function is_mobile()
	{
		$agent = new Agent();
		return $agent->isMobile();
	}

	public static function is_tablet()
	{
		$agent = new Agent();
		return $agent->isTablet();
	}

	public static function is_dekstop()
	{
		$agent = new Agent();
		return $agent->isDesktop();
	}

	public static function is_language()
	{
		$agent = new Agent();
		return $agent->languages();
	}

	public static function is_platform()
	{
		$agent = new Agent();
		return $agent->platform();
	}
}