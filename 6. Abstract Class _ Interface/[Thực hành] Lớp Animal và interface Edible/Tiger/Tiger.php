<?php
include_once (dirname(__FILE__)."/AbtractClass/Animal.php");


abstract class Tiger extends Animal
{
    public function makeNoise()
    {
        return "Tiger: roarrrr!";
    }
}