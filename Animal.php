<?php
class Animal
{
    private $name;

	public function __construct($name) {
	    $this->name = $name;   
	}

	public function __toString()
    {
        return $this->name;
    }
}