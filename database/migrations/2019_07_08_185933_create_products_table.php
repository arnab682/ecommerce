<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id')->length(11)->nullable();
            $table->integer('lebel_id')->length(11)->nullable();
            $table->string('title')->length(255)->nullable();
            $table->string('picture')->length(255)->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->integer('total_sales')->length(11)->nullable();
            $table->string('product_type')->length(255)->nullable();
            $table->tinyInteger('is_new')->length(4)->nullable();
            $table->float('cost')->nullable();
            $table->float('mrp')->nullable();
            $table->float('special_price')->nullable();
            $table->boolean('soft_delete')->default(0);
            $table->boolean('is_draft')->default(0);
            $table->tinyInteger('is_active')->length(4)->nullable();
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
        Schema::dropIfExists('products');
    }
}
