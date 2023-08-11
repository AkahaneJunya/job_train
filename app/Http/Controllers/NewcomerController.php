<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcomer;
use App\Models\User;

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

    public function store(Request $request)
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

            return redirect('/manager/newcomers/' . $newcomer->id);
        }
}
