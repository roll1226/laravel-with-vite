<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repositories\Task\TaskRepository;
use App\Services\Task\TaskService;
use App\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskServiceInterface $taskService;

    public function __construct()
    {
        $this->taskService = new TaskService(new TaskRepository());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = $this->taskService->getAllTask();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $context = $request->context;
        $status = $request->status;
        $task = $this->taskService->createTask($context, $status);
        return redirect(route('tasks.show', $task));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $context = $request->context;
        $status = $request->status;
        $updateTask = $this->taskService->updateTask($task, $context, $status);
        return redirect(route('tasks.show', ['task' => $updateTask]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
