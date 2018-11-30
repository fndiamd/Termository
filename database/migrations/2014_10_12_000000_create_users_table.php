<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user')->autoIncrement();
            $table->string('name', 150);
            $table->string('email', 150)->unique();
            $table->integer('gender');
            $table->string('password', 150);
            $table->string('phone', 20);
            $table->string('hint', 50);
            $table->float('used_storage', 12, 2);
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
            // $table->primary('id_user');
        });
    }

    public function down(){
        Schema::dropIfExists('users');
    }
}
