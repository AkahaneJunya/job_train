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
            return view('trainer.tasks.index', [
                'tasks' => $task->get(),
                'newcomer' => $newcomer,
                'ratings' => $newcomer->getByNewcomer(),
            ]);
        }
        
    public function updateTrainerRating(Request $request, Rating $rating)
        {
            $rating->trainer_rate = $request['trainer_rate'];
            $rating->save();
            
            $newcomer = $request['newcomer'];
            
            return redirect('/trainer/newcomers/' . $newcomer . '/rating');
        }
}
