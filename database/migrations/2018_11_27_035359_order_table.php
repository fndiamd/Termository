<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTable extends Migration
{
    public function up(){
        Schema::create('order', function(Blueprint $table){
            $table->integer('id_order')->autoIncrement();
            $table->integer('id_feature');
            $table->integer('id_user');
            $table->dateTime('order_date');
            $table->string('payment', 100);
            $table->integer('status');
            $table->timestamps();
        });
    }
    
    public function down(){
        Schema::dropIfExists('order');
    }
}
