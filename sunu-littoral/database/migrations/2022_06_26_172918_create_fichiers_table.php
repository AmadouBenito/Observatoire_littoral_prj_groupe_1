<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichiers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titre', 45)->nullable();
            $table->string('url', 255)->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger('user_id')->index('fk_fichiers_users1_idx');
            $table->integer('type-fichier_id')->index('fk_fichiers_type-fichiers1_idx');
            $table->integer('domaine_id')->index('fk_fichiers_domaines1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichiers');
    }
}
