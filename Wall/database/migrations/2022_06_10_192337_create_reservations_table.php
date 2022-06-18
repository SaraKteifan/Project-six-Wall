<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id');
            // $table->integer('service_id');
            $table->foreignID('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignID('service_id');
            $table->string('cost');
            $table->string('pay');
            $table->string('service_image');
            $table->integer('height');
            $table->integer('width');
            $table->float('total');
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
        Schema::dropIfExists('reservations');
    }
}
