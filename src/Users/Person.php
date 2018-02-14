<?php

namespace OOP\Users;

    /**
     *
     */
    class Person
    {
        protected $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
    }


 ?>
