<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeatureTable extends Migration
{
    public function up(){
        Schema::create('feature', function(Blueprint $table){
            $table->integer('id_feature')->autoIncrement();
            $table->string('title', 150);
            $table->float('price', 10, 2);
            $table->float('available_storage', 12, 2);
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('feature');
    }
}
