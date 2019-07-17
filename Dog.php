<?php

class Dog extends Animal implements AnimalSound {

    public function __construct() {
        parent::__construct('dog');
	}

    public function makeSound() {
    	return 'bark';
    }
}