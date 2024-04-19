<?php

namespace App\Repositories\Task;

use App\Models\Task;

interface TaskRepositoryInterface
{
    /**
     * @return Task[]
     */
    public function getAllTasks();

    /**
     * @param int $id
     * @return Task
     */
    public function getTaskById($id);

    /**
     * @param string $context
     * @param int $status
     */
    public function createTask($context, $status);

    /**
     * @param Task $task
     * @param string $context
     * @param int $status
     * @return Task
     */
    public function updateTask($task, $context, $status);
}
