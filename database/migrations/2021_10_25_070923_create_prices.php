<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // $table->integer('item_id');
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->unsigned();
            $table->string('city');
            $table->float('price', 12, 2);
            $table->timestamps();
        });

        Schema::table('prices', function($table) {
            $table->foreign('item_id')->references('id')->on('resources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
