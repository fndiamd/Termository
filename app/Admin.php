<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable{

    use Notifiable;
    protected $table = 'admin';
    
    protected $primaryKey = 'id_admin';

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'status'
    ];

    protected $hidden = [
        
    ];
}
