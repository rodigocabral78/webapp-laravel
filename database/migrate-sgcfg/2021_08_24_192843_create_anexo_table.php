<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_anexo', true);
            $table->integer('id_orgao')->index();
            $table->integer('id_public')->index();
            $table->string('tipo', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('descricao_anexo', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('nom_prefeito')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexo');
    }
}
