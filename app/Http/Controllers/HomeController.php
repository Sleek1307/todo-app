<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    // public function __construct(){
    //     $this->middleware("auth");
    // }
    public function __invoke()
    {
        //! Variables Tareas
        $tasks_Pendiente = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '0')->orderBy('id', 'asc')->paginate();
        $tasks_Haciendo = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '1')->orderBy('id', 'asc')->paginate();
        $tasks_Terminado = Task::with("category")->where("user_id", auth()->user()->getAuthIdentifier())->where('status', '2')->orderBy('id', 'asc')->paginate();

        //! Variables Categorias
        $categories = Category::orderBy('created_at', 'desc')->where("user_id", auth()->user()->getAuthIdentifier())->paginate(3);

        return view('todayTasks', compact('tasks_Pendiente', 'tasks_Haciendo', 'tasks_Terminado', 'categories'));
    }
}