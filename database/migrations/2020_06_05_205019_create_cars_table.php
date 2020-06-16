<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_desc', 255);
            $table->string('brand', 45);
            $table->string('model', 45);
            $table->enum('fuelType', ['diesel', 'gasoline', 'electric']);
            $table->enum('gearBoxType', ['manual', 'automatic']);
            $table->unsignedInteger('doorCount');
            $table->unsignedInteger('seatCount');
            $table->decimal('price');
            $table->date('purchase_date');
            $table->foreignId('category_id')->constrained();

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
        Schema::dropIfExists('cars');
    }
}
