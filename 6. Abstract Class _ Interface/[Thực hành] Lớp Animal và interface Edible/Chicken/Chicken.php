<?php
include_once (dirname(__FILE__)."AbstractClass/Animal.php");
abstract class Chicken extends Animal
{
    public function makeNoise()
    {
        return "Chicken:cluck-cluck";
    }
}