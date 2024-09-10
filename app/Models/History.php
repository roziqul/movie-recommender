<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $guarded = [];

    function movie() {
        return $this->belongsTo(Movie::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}
