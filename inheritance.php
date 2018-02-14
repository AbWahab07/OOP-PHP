<?php

    // extends keyword
    // use abstract class if you'll never be instantiating the parent/base class.
    // use abstract methods on the class if you want each child/subclass to implement the method.
    // Favor composition over Inheritance // will learn about composition in the future.
    /**
     *
     */
    abstract class Animal
    {
        protected $color;

        function __construct($color = 'black')
        {
            $this->color = $color;
        }

        abstract protected function type();

        public function getColor()
        {
            # code...
            return $this->color;
        }
    }

    /**
     *
     */
    class Dog extends Animal
    {
        protected function type()
        {
            # code...
        }

    }

    /**
     *
     */
    class Cat extends Animal
    {
        protected function type()
        {
            # code...
            return 'Persian';
        }
    }

    echo (new Cat('green'))->getColor();

 ?>
