<?php


class Cat extends Animal implements AnimalSound {

    public function __construct() {
        parent::__construct('cat');
	}
    
    public function makeSound() {
    	return 'meew';
    }
}