<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $fillable = ['name', 'email', 'cell number', 'course_id', 'computer_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}