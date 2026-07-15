<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function computers()
    {
        return $this->belongsToMany(Computer::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
