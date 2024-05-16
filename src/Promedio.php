<?php

class Promedio{

	public $numbers = [4,6,7,8];

	public function calculateAverage()
	{
		$sum = 0;
    	foreach ($this->numbers as $number) {
      		$sum += $number;
    	}

    	$average = $sum / count($this->numbers);
    	return $average;
	}
}