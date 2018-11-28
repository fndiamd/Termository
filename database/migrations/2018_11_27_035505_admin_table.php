<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminTable extends Migration
{
    public function up(){
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id_admin')->autoIncrements();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id_admin');
        });
    }

    public function down(){
        Schema::dropIfExists('admin');
    }
}
