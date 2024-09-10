<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    function genre(){
        return $this->belongsTo(Genre::class);
    }

    function history() {
        return $this->hasMany(History::class);
    }
}
