<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'title',
        'color',
        'completed',
    ];

    // protected $table = 'tasks';

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
