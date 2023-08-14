<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Newcomer;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function trainerIndex(Task $task, Newcomer $newcomer, Rating $rating)
        {
            $ratings = $rating->where('newcomer_id', $newcomer->id)->get();
            
            return view('trainer.tasks.index', [
                'tasks' => $task->get(),
                'newcomer' => $newcomer,
                'ratings' => $ratings,
            ]);
        }
}
