<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{

    protected $fillable = ['name', 'location'];
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
