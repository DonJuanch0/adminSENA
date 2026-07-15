<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
