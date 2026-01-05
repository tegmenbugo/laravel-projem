<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function activities(){
        return hasMany(Activity::class)
    }
    
}
