<?php

use PHPUnit\Framework\TestCase;

class ClientsTest extends TestCase{

	public function testValidName()
	{
		$user = new Clients('yurany');

		$expected = 'Yurany';

		$phpunit = $this;

		$closure = function() use($phpunit,$expected){
			$phpunit->assertSame($expected, $this->name);
		};

		$binding = $closure->bindTo($user, get_class($user));

		$binding();

	}
}
