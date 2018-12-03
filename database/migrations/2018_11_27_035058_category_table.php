<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTable extends Migration{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->integer('id_category')->autoIncrement();
            $table->string('category', 100);
            $table->string('faicon', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}
