<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->longText('commentaire')->nullable();
            $table->unsignedBigInteger('user_id')->index('fk_users_has_projets_users1_idx');
            $table->integer('projet_id')->index('fk_users_has_projets_projets1_idx');

            $table->unique(['id', 'user_id', 'projet_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongs');
    }
}
