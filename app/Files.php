<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id_file';

    protected $fillable = [
        'id_category', 'id_user', 'title', 'desc', 'attachment', 'size_file', 'type_file', 'flag', 'status'
    ];
}
