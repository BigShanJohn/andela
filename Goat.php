<?php

class Goat extends Animal implements AnimalSound {

	public function __construct() {
        parent::__construct('goat');
	}

    public function makeSound() {
    	return 'meee';
    }
}