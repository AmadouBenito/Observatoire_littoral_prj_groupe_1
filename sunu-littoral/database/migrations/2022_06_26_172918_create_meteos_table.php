<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meteos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vent', 45)->nullable();
            $table->string('vague', 45)->nullable();
            $table->string('etatCiel', 45)->nullable();
            $table->integer('temperature')->nullable();
            $table->string('zone', 45)->nullable();
            $table->unsignedBigInteger('user_id')->index('fk_meteos_users1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meteos');
    }
}
