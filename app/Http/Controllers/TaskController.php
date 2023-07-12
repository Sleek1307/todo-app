<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks_Pendiente = Task::where('status', '0')->orderBy('id', 'asc')->paginate();
        $tasks_Haciendo = Task::where('status', '1')->orderBy('id', 'asc')->paginate();
        $tasks_Terminado = Task::where('status', '2')->orderBy('id', 'asc')->paginate();

        return view('tasks.index', compact('tasks_Pendiente', 'tasks_Haciendo', 'tasks_Terminado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return redirect()->route('tasks.show');
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
        $request->validate([
            'task_title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.show', $task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('todayTasks');
    }
}