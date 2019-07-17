<?php 

spl_autoload_register(function($className) {
	include_once $className . '.php';
});

// Dog
$dog = new Dog();
echo 'A ' .$dog->getName(). ' '.$dog->makeSound().'<br/>'; 

// Cat
$cat = new Cat();
echo 'A ' .$cat->getName(). ' '.$cat->makeSound().'<br/>'; 

// Cat
$goat = new Goat();
echo 'A ' .$goat->getName(). ' '.$goat->makeSound(); 

