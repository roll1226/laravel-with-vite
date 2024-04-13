<?php

namespace App\Repositories\Task;

use App\Models\Task;

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
}
