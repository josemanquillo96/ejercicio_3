<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    public function traveler()
    {
        return $this->belongsTo('App\Models\traveler');
    }
    public function origins()
    {
        return $this->belongsTo('App\Models\Origin');
    }
    public function destinations()
    {
        return $this->belongsTo('App\Models\Destination');
    }
}
