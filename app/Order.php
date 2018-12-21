<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_feature', 'id_user', 'order_date', 'payment', 'status'
    ];
    protected $hidden = [];
}
