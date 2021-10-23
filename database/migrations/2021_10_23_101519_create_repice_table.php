<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repice', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreign('slot_1')->references('id')->on('resources');
            $table->integer('slot_1_amount');
            $table->foreign('slot_2')->references('id')->on('resources');
            $table->integer('slot_2_amount');
            $table->foreign('slot_3')->references('id')->on('resources');
            $table->integer('slot_3_amount');
            $table->foreign('slot_4')->references('id')->on('resources');
            $table->integer('slot_4_amount');
            $table->foreign('slot_5')->references('id')->on('resources');
            $table->integer('slot_5_amount');
            $table->float('current_price', 12, 2);
            $table->integer('tier');
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
        Schema::dropIfExists('repice');
    }
}
