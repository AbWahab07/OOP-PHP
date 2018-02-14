<?php

// use OOP\Users\Person;
// use OOP\Staff;
// use OOP\Business;
     require 'vendor/autoload.php';
//
//     $abdul = new Person ('Abdul');
//     $staff = new Staff ([$abdul]);
//
//     $business = new Business ($staff);
//
//     $business->hire(new Person('Ali'));
//     var_dump($business->getStaffMembers());

    use OOP\RegisterUser;
    use OOP\AuthController;

    $userToBeRegistered = new RegisterUser;
    $auth = new AuthController($userToBeRegistered);
    $auth->register();
 ?>
