<?php
namespace OOP;
use OOP\RegisterUser;
use OOP\ResponseToRegisterUser;
    /**
     *
     */
    class AuthController implements ResponseToRegisterUser
    {
        protected $registereduser;

        function __construct(RegisterUser $registeruser)
        {
            # code...
            $this->registereduser = $registeruser;
        }

        public function register()
        {
            # code...
            $this->registereduser->execute(['data'], $this);
        }

        public function userRegisteredSuccessfully()
        {
            # code...
            echo "Successfully Registered.";
        }
        public function userRegisterationFailed()
        {
            # code...
            echo "Failed to register.";
        }


    }


 ?>
