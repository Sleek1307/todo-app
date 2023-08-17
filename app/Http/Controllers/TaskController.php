<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTask;
use App\Http\Requests\UpdateTask;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


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
        $categories = Category::where("user_id", auth()->user()->getAuthIdentifier())->orderBy('created_at', 'desc')->paginate(3);
        return view("tasks.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTask $request)
    {
        $request->merge(["category_id" => intval($request->input("category_id")), "user_id" => auth()->user()->getAuthIdentifier()]);

        $task = Task::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $categories = Category::where("user_id", auth()->user()->getAuthIdentifier())->orderBy('created_at', 'desc')->paginate(3);

        return view('tasks.show', compact('task', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $categories = Category::where("user_id", auth()->user()->getAuthIdentifier())->orderBy('created_at', 'desc')->paginate(3);


        return view('tasks.edit', compact('task', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTask $request, Task $task)
    {
        $task->update($request->all());

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(["Hola" => "Mundo"]);
    }

    /*
        Update with ajax
    */
    public function updateAjax(Request $request){

        $task = Task::find($request->all()["id"]);

        $task->update($request->all());

        // return response()->json(["Hola" => "hola mundo"]);
 
        

        return "Hola mundo";
    }
}