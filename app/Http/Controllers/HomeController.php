<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    // public function __construct(){
    //     $this->middleware("auth");
    // }
    public function __invoke()
    {
        $tasks_Pendiente = Task::where('status', '0')->orderBy('id', 'asc')->paginate();
        $tasks_Haciendo = Task::where('status', '1')->orderBy('id', 'asc')->paginate();
        $tasks_Terminado = Task::where('status', '2')->orderBy('id', 'asc')->paginate();

        return view('todayTasks', compact('tasks_Pendiente', 'tasks_Haciendo', 'tasks_Terminado'));
    }
}
