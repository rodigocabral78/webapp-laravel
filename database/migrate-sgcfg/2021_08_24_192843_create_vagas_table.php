<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_anexo');
            $table->integer('id_cargos')->index();
            $table->integer('id_simbol')->index();
            $table->integer('id_orgao')->index();
            $table->integer('id_public')->index();
            $table->integer('quantidade');
            $table->integer('ordem');
            $table->primary(['id_anexo', 'id_cargos', 'id_simbol']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
