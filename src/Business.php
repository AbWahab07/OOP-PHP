<?php

namespace OOP;
use OOP\Users\Person;
    /**
     *
     */
    class Business
    {
        protected $staff;

        function __construct(Staff $staff)
        {
            $this->staff = $staff;
        }

        public function hire(Person $person)
        {
            $this->staff->add($person);
        }

        public function getStaffMembers()
        {
            return $this->staff->getMembers();
        }
    }

 ?>
