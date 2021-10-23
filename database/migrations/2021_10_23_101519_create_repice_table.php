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
            $table->uuid('id')->primary();
            $table->string('name');
            $table->float('current_price', 12, 2);
            $table->integer('tier');
            $table->uuid('slot_1');
            $table->uuid('slot_1');
            $table->integer('slot_1_amount');
            $table->uuid('slot_2');
            $table->uuid('slot_2');
            $table->integer('slot_2_amount');
            $table->uuid('slot_3');
            $table->uuid('slot_3');
            $table->integer('slot_3_amount');
            $table->uuid('slot_4');
            $table->uuid('slot_4');
            $table->integer('slot_4_amount');
            $table->uuid('slot_5');
            $table->uuid('slot_5');
            $table->integer('slot_5_amount');
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
