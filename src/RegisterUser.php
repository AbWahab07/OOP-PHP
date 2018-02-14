<?php
namespace OOP;
    /**
     *
     */
    class RegisterUser
    {
        public function execute(array $data, ResponseToRegisterUser $listener)
        {
            //
            echo 'Executing the registeration ';
            echo nl2br("\n");
            $listener->userRegisterationFailed();
        }
    }


 ?>
