<?php

class Clients{

	protected $name;

	public function __construct($name)
	{
		$this->name = ucfirst($name);
	}

	public function getName()
	{
		return $this->name;
	}
}