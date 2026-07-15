<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
