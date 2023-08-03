<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

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
}
