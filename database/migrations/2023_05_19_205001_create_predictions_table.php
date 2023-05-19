<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('bmi');
            $table->integer('smoke');
            $table->integer('alcohol');
            $table->integer('storke');

            $table->integer('physical_health');
            $table->integer('mental_health');
            $table->integer('diff_walk');
            $table->integer('sex');

            $table->integer('diabetes');
            $table->integer('play_sport');
            $table->integer('sleep_hour');

            $table->integer('asthma');
            $table->integer('kidney_disease');
            $table->integer('skin_cancer');

            $table->integer('age');
            $table->enum('result',[0,1]);



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
        Schema::dropIfExists('predictions');
    }
};
