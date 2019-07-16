<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operator_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->string('boarding_point');
            $table->string('destination')->unique();
            $table->string('type');
            $table->string('no_of_seats');
            $table->string('features');
            $table->string('driver_name');
            $table->string('driver_contact');
            $table->string('availability');
            $table->integer('ticket_price');
            $table->integer('shift');
            $table->string('bus_image')->nullable();
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
        Schema::dropIfExists('buses');
    }
}
