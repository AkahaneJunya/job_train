<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Task $task)
        {
            return view('manager.tasks.index')->with(['tasks' => $task->get()]);
        }
        
    public function show(Task $task)
        {
            return view('manager.tasks.show')->with(['task' => $task]);
        }
        
    public function create()
        {
            return view('manager.tasks.create');
        }
}
