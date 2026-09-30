<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['course number', 'day', 'area_id', 'training_center_id'];
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
