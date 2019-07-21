<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popular_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->length(255)->nullable();
            $table->string('link')->length(255)->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('soft_delete')->default(0);
            $table->boolean('is_draft')->default(0);
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
        Schema::dropIfExists('popular_tag');
    }
}
