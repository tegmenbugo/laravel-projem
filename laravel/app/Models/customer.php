<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class customer extends Model
{

    protected $guarded = ['id']
    public function activities() {
        return belongsTo(customer::class);
    }
    public function meals(){
        return hasMany(Meal::class)
    }




}

