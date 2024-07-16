<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;
    public function travel()
    {
        return $this->hasMany('App\Models\Travel');
    }
}
