<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcomer;

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
}
