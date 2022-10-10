<?php

namespace App\Controllers;

use App\Models\Task;

class TasksController
{
    public function create()
    {
        Task::create([
            'title' => $_POST['title'],
            'color' => $_POST['color'],
            'completed' => 0,
        ]);

        return redirect('/');
    }

    public function toggle($taskId)
    {
        $task = Task::find($taskId);

        $task->update([
            'completed' => $_POST['completed'],
        ]);

        return redirect('/');
    }

    public function delete($taskId)
    {
        $task = Task::find($taskId);
        $task->delete();

        return redirect('/');
    }

}
