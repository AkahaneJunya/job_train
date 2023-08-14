<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'newcomer_id',
        'task_id',
        'newcomer_rate',
        'trainer_rate',
    ];
    
    public function newcomer()
    {
        return $this->belongsTo(Newcomer::class, 'newcomer_id', 'id');
    }
    
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
    
}
