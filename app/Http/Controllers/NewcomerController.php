<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcomer;
use App\Models\User;
use App\Models\Task;
use App\Models\Rating;
use App\Http\Requests\NewcomerStoreRequest;
use App\Http\Requests\NewcomerUpdateRequest;

class NewcomerController extends Controller
{
    public function index(Newcomer $newcomer)
        {
            $newcomers = Newcomer::with('user')->get();

            return view('manager.newcomers.index')->with(['newcomers' => $newcomer->get()]);
        }
        
    public function show(Newcomer $newcomer)
        {
            return view('manager.newcomers.show')->with(['newcomer' => $newcomer]);
        }
        
    public function create()
        {
            return view('manager.newcomers.create');
        }

    public function store(NewcomerStoreRequest $request)
        {
            $user = new User([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'status' => '新人'
            ]);

            $user->save();

            $newcomer = new Newcomer([
                'entering_date' => $request->input('entering_date'),
                'user_id' => $user->id
            ]);

            $newcomer->save();
            
            $tasks = Task::all();
            foreach ($tasks as $task) {
                Rating::create([
                    'newcomer_id' => $newcomer->id,
                    'task_id' => $task->id,
                    'trainer_rate' => 0,
                    'newcomer_rate' => 0,
                ]);
            }

            return redirect('/manager/newcomers/' . $newcomer->id);
        }
        
    public function edit(Newcomer $newcomer)
        {
            return view('manager.newcomers.edit')->with(['newcomer' => $newcomer]);
        }

    public function update(Newcomer $newcomer , NewcomerUpdateRequest $request)
        {
            $user = $newcomer->user;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->save();

            $newcomer->entering_date = $request['entering_date'];
            $newcomer->save();

            return redirect('/manager/newcomers/' . $newcomer->id);
        }
        
     public function delete(Newcomer $newcomer)
        {
            $newcomer->delete();
            $newcomer->user->delete();
            $newcomer->ratings()->delete();

            return redirect('/manager/newcomer');
        }
}
