<?php

require 'Model.php';


class Task extends Model
{
    protected $table = 'tasks';

    // public function __construct(
    //     public $title = '',
    //     public $completed = false
    // )
    // {
    // }

    public function complete()
    {
        $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
