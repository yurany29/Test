<?php

class VerifyAge{

	public $age;

	public function getAge()
	{
		if($this->age <= 10)
		return 'Niño';
		elseif($this->age >= 12 && $this->age < 18)
		return 'Adolescente';
		else
		return 'Adulto';
	}
}