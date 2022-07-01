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
            $table->id();
            $table->text('titre');
            $table->text('contenue');
            $table->string('image', 255);
            $table->string('video', 255)->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger('user_id')->index('fk_actualites_user_idx');
            $table->integer('categorie_id')->index('fk_actualites_categories1_idx');
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
