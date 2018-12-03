<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogDownload extends Model
{
    protected $table = 'log_download_file';
    protected $fillable = [
        'id_file', 'ip_address', 'time_download'
    ];
    protected $hidden = [];
}
