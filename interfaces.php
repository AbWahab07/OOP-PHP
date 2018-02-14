<?php
    // Interface think of it as a contract.
    // Important : Program to an interface not an implementation/conceretion
    // Class which impelements an interface can't have a __construct method.
    // If there are multiple ways to do the same task, consider using interface.


    /**
     *
     */
    interface Logger
    {
        public function execute($msg);
    }

    /**
     *
     */
    class LogToDB implements Logger
    {
        public function execute($msg)
        {
            # code...
            echo 'Logged to Db ' . $msg;
        }
    }

    /**
     *
     */
    class LogToFile implements Logger
    {
        public function execute($msg)
        {
            # code...
            echo 'Logged to File ' . $msg;
        }
    }

    /**
     *
     */
    class UserController
    {

        protected $logger;

        function __construct(Logger $logger)
        {
            $this->logger = $logger;
        }

        public function show()
        {
            # code...
            $this->logger->execute('John doe');
        }
    }

    $controller = new UserController(new LogToFile);
    $controller->show();






 ?>
