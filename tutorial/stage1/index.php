<?php

/**
The Task class stores all the details of a Task

**/
class Task{
    private $completed;
    private $date_started;
    private $date_completed;

    public function __construct($date_started,$description) {
      $this->date_started = $date_started;
      $this->description = $description;
    }

    public function set_completed($completed) {
      $this->completed = $completed;
    }

    public function get_completed() {

    }
}
?>
