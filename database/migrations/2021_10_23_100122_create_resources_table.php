<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('tier')->nullable();
            $table->integer('category_id')->unsigned();
            $table->json('slot_1')->nullable();
            $table->integer('slot_1_amount')->nullable();
            $table->json('slot_2')->nullable();
            $table->integer('slot_2_amount')->nullable();
            $table->json('slot_3')->nullable();
            $table->integer('slot_3_amount')->nullable();
            $table->json('slot_4')->nullable();
            $table->integer('slot_4_amount')->nullable();
            $table->json('slot_5')->nullable();
            $table->integer('slot_5_amount')->nullable();
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
        Schema::dropIfExists('resources');
    }
}
