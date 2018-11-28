<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTable extends Migration
{
    public function up(){
        Schema::create('order', function(Blueprint $table){
            $table->integer('id_order')->autoIncrements();
            $table->integer('id_feature');
            $table->integer('id_user');
            $table->dateTime('order_date');
            $table->string('payment');
            $table->integer('status');
            $table->primary('id_order');
            $table->timestamps();
        });
    }
    
    public function down(){
        Schema::dropIfExists('order');
    }
}
