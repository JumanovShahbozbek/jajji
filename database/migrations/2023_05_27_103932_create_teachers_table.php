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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('tgram')->nullable();
            $table->text('fbook')->nullable();
            $table->text('insta')->nullable();
            $table->text('name')->nullable();
            $table->text('job_uz')->nullable();
            $table->text('job_ru')->nullable();
            $table->text('job_en')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
