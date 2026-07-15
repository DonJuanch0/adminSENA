<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
