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
            $table->string('url')->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger('users_id')->index('fk_fichiers_users1_idx');
            $table->integer('type-fichiers_id')->index('fk_fichiers_type-fichiers1_idx');
            $table->integer('domaines_id')->index('fk_fichiers_domaines1_idx');
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
