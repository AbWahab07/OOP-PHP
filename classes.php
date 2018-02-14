<?php

    /**
     *
     */
    class Task
    {
        public $title;
        public $desc;
        public $completed = false;

        function __construct($title, $desc)
        {
            $this->title = $title;
            $this->desc = $desc;
        }

        public function complete()
        {
            $this->completed = true;
        }


    }

    $task = new Task ('Go to Shop', 'Shop');

    var_dump($task->title);
    var_dump($task->completed);
    $task->complete();
    var_dump($task->completed);

 ?>
