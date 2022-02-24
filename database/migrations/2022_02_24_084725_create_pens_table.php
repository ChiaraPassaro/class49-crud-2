<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pens', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('brand', 60);
            $table->string('series', 80);
            $table->string('color', 100);
            $table->string('type', 80);
            $table->string('refill', 100);
            $table->string('body_material', 100);
            $table->smallInteger('closed_length');
            $table->smallInteger('body_length');
            $table->smallInteger('cap_length');
            $table->float('diameter');
            $table->smallInteger('weigth');
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
        Schema::dropIfExists('pens');
    }
}
