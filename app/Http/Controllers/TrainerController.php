<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TrainerRequest;

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
    
    public function store(UserRequest $user_request , TrainerRequest $trainer_request)
        {
            $user = new User([
                'name' => $user_request->input('name'),
                'email' => $user_request->input('email'),
                'password' => bcrypt($user_request->input('password')),
                'status' => '教育係'
            ]);
            
            $user->save();
    
            $trainer = new Trainer([
                'record_date' => $trainer_request->input('record_date'),
                'user_id' => $user->id
            ]);
    
            $trainer->save();
    
            return redirect('/manager/trainers/' . $trainer->id);
        }
}
