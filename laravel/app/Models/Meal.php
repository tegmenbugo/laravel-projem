<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function customer(){
        return belongsTo(Customer::class)
    }
    public function food(){
        return belongsTo(Food::class)
    }
}
