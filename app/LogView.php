<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogView extends Model
{
    protected $table = 'log_view_file';
    protected $fillable = [
        'id_file', 'ip_address', 'time_view'
    ];
    protected $hidden = [];
}
