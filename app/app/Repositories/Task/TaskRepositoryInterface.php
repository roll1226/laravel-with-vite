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
}
