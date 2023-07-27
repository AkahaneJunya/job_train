<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirectToStatusPage()
    {
        // ログインユーザーのステータスを取得
        $status = Auth::user()->status;

        // ステータスによって条件分岐して遷移先のページを決定
        if ($status === '店長') {
            return view('manager/dashboard');
        } elseif ($status === '教育係') {
            return view('trainer/dashboard');
        } elseif ($status === '新人') {
            return view('newcomer/dashboard');
        } else {
            return view('dashboard');
        }
    }
    
}
