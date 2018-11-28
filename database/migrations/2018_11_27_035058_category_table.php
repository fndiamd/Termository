<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTable extends Migration{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->integer('id_category')->autoIncrements();
            $table->string('category');
            $table->timestamps();
            $table->primary('id_category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}
