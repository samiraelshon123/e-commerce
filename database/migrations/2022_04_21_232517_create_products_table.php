<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
            $table->string('size');
            $table->string('image');
            $table->string('about', 1000);
            $table->string('descreption', 1000);
            $table->integer('price');
            $table->integer('category_id');
            $table->timestamps();
        });
        // Schema::table('products', function($table) {
        //     $table->forign('category_id')
        //     ->reference('id')->on('categories')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
