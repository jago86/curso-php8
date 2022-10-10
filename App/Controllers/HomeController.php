<?php

namespace App\Controllers;

use App\Models\Task;

class HomeController
{
    public function show()
    {
        $greeting = 'Hola mundo';

        $completedTasks = Task::where('completed', true)->get();
        $pendingTasks = Task::where('completed', false)->get();


        return view('index', [
            'greeting' => $greeting,
            'completedTasks' => $completedTasks,
            'pendingTasks' => $pendingTasks,
        ]);
    }
}
