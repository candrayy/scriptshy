<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jns_konten_id');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('hashtag_id');
            $table->string('judul_konten');
            $table->longText('caption');
            $table->timestamps();
            $table->foreign('jns_konten_id')->references('id')->on('jns_konten')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('platform_id')->references('id')->on('platform')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('hashtag_id')->references('id')->on('hashtag')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
