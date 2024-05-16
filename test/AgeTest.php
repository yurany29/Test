<?php

use PHPUnit\Framework\TestCase;

class AgeTest extends TestCase{

	public function testMessageAge10()
	{
		$expected = 'Niño';

		$showAge = new VerifyAge();

		$showAge->age = 8;

		$result = $showAge->getAge();

		$this->assertSame($expected, $result);
	}

	public function testMessageAge12()
	{
		$expected = 'Adolescente';

		$showAge = new VerifyAge();

		$showAge->age = 14;

		$result = $showAge->getAge();

		$this->assertSame($expected, $result);
	}

	public function testMessageAge18()
	{
		$expected = 'Adulto';

		$showAge = new VerifyAge();

		$showAge->age = 39;

		$result = $showAge->getAge();

		$this->assertSame($expected, $result);
	}
}