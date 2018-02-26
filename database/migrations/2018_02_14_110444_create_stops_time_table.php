<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopsTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stops_time', function (Blueprint $table) {
            $table->increments('id');

            $table->time('arrived_time');
            $table->time('departure_time');
            $table->string('stop_sequence');
            $table->integer('trip_id')->unsigned();
            $table->foreign('trip_id')
                ->references('id')->on('trips')
                ->onDelete('cascade');


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
        Schema::dropIfExists('stops_time');
    }
}
