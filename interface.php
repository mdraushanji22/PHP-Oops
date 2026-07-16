<?php

interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{

    public function makeSound()
    {
        echo "Cat is meow";
    }
}
class Dog implements Animal{
    #[Override]
    public function makeSound()
    {
        echo "Dog is bark <br/>";
    }
}
$c1 = new Cat();
$c1->makeSound();

$dog = New Dog();
$dog->makeSound();
