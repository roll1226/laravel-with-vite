<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class TaskRepository implements TaskRepositoryInterface
{
    public function getAllTasks()
    {
        return Task::all();
    }

    public function getTaskById($id)
    {
        return Task::find($id);
    }

    public function createTask($context, $status)
    {
        $task = new Task();
        $task->context = $context;
        $task->status = $status;
        $task->save();
        return $task;
    }

    public function updateTask($task, $context, $status)
    {
        $task->context = $context;
        $task->status = $status;
        $task->save();
        return $task;
    }
}
