<?php

namespace Toadsuck\Core\Tests\App\Controllers;

use Toadsuck\Core\Console as ConsoleController;

class Console extends ConsoleController
{
	public function __construct($opts)
	{
		parent::__construct($opts);
	}

	public function sayHello($name = 'Dave')
	{
		printf('Hello, %s', $name);
	}
}
