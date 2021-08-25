<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAnexoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anexo', function (Blueprint $table) {
            $table->foreign('id_orgao')->references('id_orgao')->on('orgao');
            $table->foreign('id_public')->references('id_public')->on('public')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anexo', function (Blueprint $table) {
            $table->dropForeign('anexo_id_orgao_foreign');
            $table->dropForeign('anexo_id_public_foreign');
        });
    }
}
