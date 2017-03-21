<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercisetype_id')->unsigned();
            $table->foreign('exercisetype_id')->references('id')->on('exercise_types');
            //$table->integer('exerciselist_id')->unsigned();
            //$table->foreign('exerciselist_id')->references('id')->on('exercise_lists');
            $table->text('enunciation');
            $table->text('answer'); 
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
        Schema::dropIfExists('exercises');
    }
}


