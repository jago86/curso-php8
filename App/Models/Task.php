<?php

namespace App\Models;

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
