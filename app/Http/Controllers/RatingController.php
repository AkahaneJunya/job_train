<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Newcomer;
use App\Models\Rating;

class RatingController extends Controller
{
    public function newcomerIndex(Newcomer $newcomer)
        {
            return view('trainer.newcomers.index')->with(['newcomers' => $newcomer->get()]);
        }
        
    public function trainerRatingIndex(Task $task, Newcomer $newcomer, Rating $rating)
        {
            return view('trainer.ratings.index', [
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
