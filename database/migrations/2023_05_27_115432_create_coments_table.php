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
        Schema::create('coments', function (Blueprint $table) {
            $table->id();
            $table->text('icon')->nullable();
            $table->text('content_uz')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_en')->nullable();
            $table->text('img')->nullable();
            $table->text('surname')->nullable();
            $table->text('name')->nullable();
            $table->text('job_uz')->nullable();
            $table->text('job_ru')->nullable();
            $table->text('job_en')->nullable();
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
        Schema::dropIfExists('coments');
    }
};
