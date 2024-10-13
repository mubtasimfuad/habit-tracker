<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'user_id', 'name', 'goal', 'start_date', 'end_date', 'status',
    ];

    // Define the relationship: One Habit belongs to One User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship: One Habit has Many Progress updates
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}