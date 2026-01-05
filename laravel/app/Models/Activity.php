<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function customer()
    {
        return belongsTo(customer::class);
    }
    public function exercise(){
        return belongsTo(Exercise::class)
    }
}
