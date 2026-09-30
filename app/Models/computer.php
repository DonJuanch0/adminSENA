<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{

    protected $fillable = ['number', 'brand', 'model'];
    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
