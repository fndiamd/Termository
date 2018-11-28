<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogviewFile extends Migration
{
    public function up(){
        Schema::create('log_view_file', function(Blueprint $table){
            $table->integer('id_file');
            $table->string('ip_address', 150);
            $table->dateTime('time_view');
        });
    }

    public function down(){
        Schema::dropIfExits('log_view_file');
    }
}
