<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->length(255)->nullable();
            $table->string('picture')->length(255)->nullable();
            $table->string('link')->length(255)->nullable();
            $table->string('promotional_message')->length(255)->nullable();
            $table->string('html_banner')->length(255)->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_draft')->default(0);
            $table->boolean('soft_delete')->default(0);
            $table->boolean('max_display')->default(0);
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
        Schema::dropIfExists('banners');
    }
}
