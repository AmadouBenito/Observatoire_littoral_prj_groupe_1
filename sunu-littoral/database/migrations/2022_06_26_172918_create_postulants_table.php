<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulants', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('fichier', 45)->nullable();
            $table->unsignedBigInteger('users_id')->index('fk_users_has_appelDoffres_users1_idx');
            $table->integer('appelDoffres_id')->index('fk_users_has_appelDoffres_appelDoffres1_idx');

            $table->unique(['id', 'users_id', 'appelDoffres_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulants');
    }
}
