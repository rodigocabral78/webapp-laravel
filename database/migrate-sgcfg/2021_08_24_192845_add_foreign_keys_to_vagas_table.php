<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vagas', function (Blueprint $table) {
            $table->foreign('id_anexo')->references('id_anexo')->on('anexo');
            $table->foreign('id_cargos')->references('id_cargos')->on('cargos');
            $table->foreign('id_simbol')->references('id_simbol')->on('simbol');
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
        Schema::table('vagas', function (Blueprint $table) {
            $table->dropForeign('vagas_id_anexo_foreign');
            $table->dropForeign('vagas_id_cargos_foreign');
            $table->dropForeign('vagas_id_simbol_foreign');
            $table->dropForeign('vagas_id_orgao_foreign');
            $table->dropForeign('vagas_id_public_foreign');
        });
    }
}
