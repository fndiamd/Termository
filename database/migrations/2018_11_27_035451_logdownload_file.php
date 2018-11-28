<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogdownloadFile extends Migration
{
    public function up(){
        Schema::create('log_download_file', function(Blueprint $table){
            $table->integer('id_file');
            $table->string('ip_address', 150);
            $table->dateTime('time_download');
        });
    }

    public function down(){
        Schema::dropIfExists('log_download_file');
    }
}
