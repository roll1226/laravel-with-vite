<?php

namespace App\Services\Task;

use App\Repositories\Task\TaskRepositoryInterface;

class TaskService implements TaskServiceInterface
{
    private TaskRepositoryInterface $taskRepository;

    /**
     * @param TaskRepositoryInterface $taskRepository
     */
    public function __construct($taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTask()
    {
        return $this->taskRepository->getAllTasks();
    }

    public function getTaskById($id)
    {
        return $this->taskRepository->getTaskById($id);
    }

    public function createTask($context, $status)
    {
        $this->taskRepository->createTask($context, $status);
    }

    public function updateTask($task, $context, $status)
    {
        return $this->taskRepository->updateTask($task, $context, $status);
    }
}
