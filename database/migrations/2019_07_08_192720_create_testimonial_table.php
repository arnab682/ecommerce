<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('picture')->length(255)->nullable();
            $table->string('body')->length(255)->nullable();
            $table->string('name')->length(255)->nullable();
            $table->string('designation')->length(255)->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_draft')->default(0);
            $table->boolean('soft_delete')->default(0);
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
        Schema::dropIfExists('testimonial');
    }
}
