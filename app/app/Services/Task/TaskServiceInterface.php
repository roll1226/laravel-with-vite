<?php

namespace App\Services\Task;

use App\Models\Task;

interface TaskServiceInterface
{
    /**
     * @return Task[]
     */
    public function getAllTask();

    /**
     * @param int $id
     * @return Task
     */
    public function getTaskById($id);

    /**
     * @param string $context
     * @param int $status
     * @return Task
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
