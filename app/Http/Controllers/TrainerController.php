<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trainer;
use App\Http\Requests\TrainerStoreRequest;
use App\Http\Requests\TrainerUpdateRequest;

class TrainerController extends Controller
{
     public function index(Trainer $trainer)
        {
            $trainers = Trainer::with('user')->get();
            
            return view('manager.trainers.index')->with(['trainers' => $trainer->get()]);
        }
    
    public function show(Trainer $trainer)
        {
            return view('manager.trainers.show')->with(['trainer' => $trainer]);
        }
        
    public function create()
        {
            return view('manager.trainers.create');
        }
    
    public function store(TrainerStoreRequest $request)
        {
            $user = new User([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'status' => '教育係'
            ]);
            
            $user->save();
    
            $trainer = new Trainer([
                'record_date' => $request->input('record_date'),
                'user_id' => $user->id
            ]);
    
            $trainer->save();
    
            return redirect('/manager/trainers/' . $trainer->id);
        }
    
    public function edit(Trainer $trainer)
        {
            return view('manager.trainers.edit')->with(['trainer' => $trainer]);
        }
    
    public function update(Trainer $trainer , TrainerUpdateRequest $request)
        {
            $user = $trainer->user;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->save();
            
            $trainer->record_date = $request['record_date'];
            $trainer->save();
            
            return redirect('/manager/trainers/' . $trainer->id);
        }
        
    public function delete(Trainer $trainer)
        {
            $trainer->delete();
            $trainer->user->delete();
            
            return redirect('/manager/trainer');
        }
}
