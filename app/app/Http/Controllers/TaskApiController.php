<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\Task\TaskService;
use App\Services\Task\TaskServiceInterface;
use App\Repositories\Task\TaskRepository;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    private TaskServiceInterface $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService(new TaskRepository());
    }

    public function show(Task $task)
    {
        return $task;
    }
}
