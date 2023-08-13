<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Newcomer;
use App\Models\Rating;
use App\Http\Requests\TaskRequest;

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
        
    public function store(TaskRequest $request, Task $task)
        {
            $task = new Task([
                'name' => $request->input('name'),
                'detail' => $request->input('detail'),
            ]);
            $task->save();
            
            $newcomers = Newcomer::all();
            foreach ($newcomers as $newcomer) {
                Rating::create([
                    'newcomer_id' => $newcomer->id,
                    'task_id' => $task->id,
                    'trainer_rate' => 0,
                    'newcomer_rate' => 0,
                ]);
            }
            
            return redirect('/manager/tasks/' . $task->id);
        }
    
    public function edit(Task $task)
        {
            return view('manager.tasks.edit')->with(['task' => $task]);
        }
    
    public function update(TaskRequest $request, Task $task)
        {
            $task->name = $request->input('name');
            $task->detail = $request->input('detail');
            $task->save();
        
            return redirect('/manager/tasks/' . $task->id);
        }
        
    public function delete(Task $task)
        {
            $task->delete();
            return redirect('/manager/task');
        }
}
