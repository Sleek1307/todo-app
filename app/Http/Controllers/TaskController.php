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

        date_default_timezone_set('America/Bogota');
        $date = date("Y-m-d");

        $tasks_Pendiente = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '0')->where('date', $date)->orderBy('id', 'asc')->paginate(3);
        $tasks_Haciendo = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '1')->where('date', $date)->orderBy('id', 'asc')->paginate(3);
        $tasks_Terminado = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '2')->where('date', $date)->orderBy('id', 'asc')->paginate(3);

        //! Variables Categorias
        $categories = Category::orderBy('created_at', 'desc')->where("user_id", auth()->user()->getAuthIdentifier())->get();

        return view('tasks.index', compact('tasks_Pendiente', 'tasks_Haciendo', 'tasks_Terminado', 'categories', 'date'));
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

    public function indexWithDate (Request $request) {

        $date = $request->input("date");

        $tasks_Pendiente = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '0')->where('date', $request->only('date'))->orderBy('id', 'asc')->paginate(3);
        $tasks_Haciendo = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '1')->where('date', $request->only('date'))->orderBy('id', 'asc')->paginate(3);
        $tasks_Terminado = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '2')->where('date', $request->only('date'))->orderBy('id', 'asc')->paginate(3);

        $categories = Category::orderBy('created_at', 'desc')->where("user_id", auth()->user()->getAuthIdentifier())->get();

        return view('tasks.index', compact('tasks_Pendiente', 'tasks_Haciendo', 'tasks_Terminado', 'categories', 'date'));
    }
    public function asyncUpdate(Request $request)
    {

        $task = Task::find($request->all()["id"]);

        $task->update($request->all());

        return response()->json([
            "success" => true,
        ]);
    }
}