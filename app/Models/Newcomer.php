<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newcomer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'entering_date',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function ratings()
    {
        return $this->hasMany(Rating::class)->orderBy('task_id', 'asc');
    }
    
    public function getByNewcomer()
    {
        return $this->ratings()->get();
    }
}
