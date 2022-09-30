<?php

class HomeController
{
    public function show()
    {
        $greeting = 'Hola mundo';

        $tasks = Task::all();

        $completedTasks = array_filter($tasks, function ($task) {
            return $task->completed;
        });

        $pendingTasks = array_filter($tasks, function ($task) {
            return !$task->completed;
        });

        return view('index', [
            'greeting' => $greeting,
            'tasks' => $tasks,
            'completedTasks' => $completedTasks,
            'pendingTasks' => $pendingTasks,
        ]);
    }
}
