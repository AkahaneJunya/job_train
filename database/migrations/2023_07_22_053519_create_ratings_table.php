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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('newcomer_id');
            $table->unsignedBigInteger('task_id');
            $table->unsignedTinyInteger('trainer_rate')->default(0);
            $table->unsignedTinyInteger('newcomer_rate')->default(0);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('newcomer_id')->references('id')->on('newcomers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
