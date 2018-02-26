<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route_Sname');
            $table->string('route_Lname');
            $table->string('route_desc');
            $table->string('route_type');
            $table->string('route_color');
            $table->string('coordonne');
            $table->integer('agence_id')->unsigned();
            $table->foreign('agence_id')
                ->references('id')
                ->on('agences')
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
        Schema::dropIfExists('routes');
    }
}
