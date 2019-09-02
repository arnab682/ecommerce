<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sid')->nullable();
            $table->integer('product_id')->length(11)->nullable();
            $table->string('picture')->length(255)->nullable();
            $table->string('product_title')->length(255)->nullable();
            $table->integer('qty')->length(11)->nullable();
            $table->integer('unite_price')->length(11)->nullable();
            $table->integer('total_price')->length(11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
