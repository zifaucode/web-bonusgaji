<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'filteradmin' => \App\Filters\FilterAdmin::class,
		'filterpegawai' => \App\Filters\FilterPegawai::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'filteradmin' => ['except' => [
				'auth/*', 'auth/*',
				'/',

			]],
			'filterpegawai' => ['except' => [
				'auth/*', 'auth/*',
				'/',

			]]
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'filteradmin' => ['except' => [
				'Admin/',
				'Admin/*',
				'Bonus/',
				'Bonus/*',
				'Databonus/',
				'Databonus/*',
				'User/',
				'User/*',


			]],

			'filterpegawai' => ['except' => [
				'Pegawai/',
				'Pegawai/*',


			]],

			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
