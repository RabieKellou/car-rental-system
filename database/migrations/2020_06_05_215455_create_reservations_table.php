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
            $table->decimal('amount');
            $table->date('pickup_date');
            $table->date('return_date');

            $table->foreignId('car_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pickup_loc')->constrained('locations');
            $table->foreignId('return_loc')->constrained('locations');

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
