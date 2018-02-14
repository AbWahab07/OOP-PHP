<?php

namespace OOP;
use OOP\Users\Person;

    /**
     *
     */
    class Staff
    {
        protected $members = [];

        function __construct($member = [])
        {
            # code...
            $this->members = $member;
        }

        public function add(Person $person)
        {
            $this->members[] = $person;
        }

        public function getMembers()
        {
            return $this->members;
        }
    }

 ?>
