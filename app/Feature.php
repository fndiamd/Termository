<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'feature';
    protected $fillable = [
        'title', 'price', 'available_storage', 'description'
    ];
    protected $hidden = [];
}
