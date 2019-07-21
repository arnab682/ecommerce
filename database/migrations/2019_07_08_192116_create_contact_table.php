<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->length(40)->nullable();
            $table->string('email')->length(40)->nullable();
            $table->string('subject')->length(255)->nullable();
            $table->text('comment')->nullable();
            $table->tinyInteger('status')->length(4)->nullable();
            $table->boolean('soft_delete')->default(0);
            $table->date('datetime')->nullable();
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
        Schema::dropIfExists('contact');
    }
}
