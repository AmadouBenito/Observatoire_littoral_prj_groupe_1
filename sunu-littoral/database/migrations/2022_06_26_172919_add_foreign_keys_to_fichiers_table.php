<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fichiers', function (Blueprint $table) {
            $table->foreign(['domaine_id'], 'fk_fichiers_domaines1')->references(['id'])->on('domaines')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'fk_fichiers_users1')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['type_fichier_id'], 'fk_fichiers_type-fichiers1')->references(['id'])->on('type-fichiers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichiers', function (Blueprint $table) {
            $table->dropForeign('fk_fichiers_domaines1');
            $table->dropForeign('fk_fichiers_users1');
            $table->dropForeign('fk_fichiers_type-fichiers1');
        });
    }
}
