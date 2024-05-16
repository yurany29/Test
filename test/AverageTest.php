<?php

use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase{

	public function testAverage()
	{
		$expected = 6.25;

		$Average = new Promedio;

		$result = $Average->calculateAverage();

		$this->assertEquals($expected, $result);
	}

	

	
}