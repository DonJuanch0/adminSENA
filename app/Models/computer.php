<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{

    protected $fillable = [
        'name',
        'number',
        'brand',
        'image_url',
        'image_public_id',
        'model',
    ];

    public function apprentices()
    {
        return $this->hasMany(Apprentice::class);
    }
}
