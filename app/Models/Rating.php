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
        'newcomer_rating',
        'trainer_rating',
    ];
    
    public function newcomer()
    {
        return $this->belongsTo(Newcomer::class);
    }
}
