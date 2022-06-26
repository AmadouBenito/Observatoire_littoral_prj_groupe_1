<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titre', 45)->nullable();
            $table->string('contenue', 45)->nullable();
            $table->string('image', 45)->nullable();
            $table->string('video', 45)->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger('users_id')->index('fk_actualites_users_idx');
            $table->integer('categories_id')->index('fk_actualites_categories1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualites');
    }
}
