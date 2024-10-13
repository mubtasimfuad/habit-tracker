<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'habit_id', 'date', 'progress',
    ];

    // Define the relationship: Progress belongs to a Habit
    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}