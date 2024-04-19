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
     * @return void
     */
    public function createTask($context, $status);
}
