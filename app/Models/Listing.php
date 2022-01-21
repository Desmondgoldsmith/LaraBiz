<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //use HasFactory;
// creating relationship between models
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
