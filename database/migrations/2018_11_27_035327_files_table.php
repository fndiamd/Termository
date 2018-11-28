<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FilesTable extends Migration
{
    public function up(){
        Schema::create('files', function (Blueprint $table){
            $table->integer('id_file')->autoIncrements();
            $table->integer('id_category');
            $table->integer('id_user');
            $table->string('title', 200);
            $table->text('desc');
            $table->string('attachment', 150);
            $table->integer('size_file');
            $table->string('type_file', 50);
            $table->integer('flag');
            $table->integer('status');
            $table->timestamps();
            $table->primary('id_file');
        });
    }

    public function down(){
        Schema::dropIfExists('files');
    }
}
