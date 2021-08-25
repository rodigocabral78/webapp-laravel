<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidor', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_servidor', true);
            $table->integer('id_orgao')->index();
            $table->integer('id_public')->index();
            $table->integer('id_anexo')->index();
            $table->integer('id_cargos')->index();
            $table->integer('id_simbol')->index();
            $table->string('cpf', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('matricula', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('nome', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('vinculo');
            $table->integer('id_funcao')->index();
            $table->string('vencimento', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->double('gratificacao');
            $table->string('dt_nomeacao', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('num_diario', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('dt_diario', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_posse', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('decreto', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('situacao');
            $table->string('num_portaria', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_portaria', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_contar', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_dt_decreto', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_num_diario', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_dt_diario', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_inicio', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_termino', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('adm');
            $table->text('observacao')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('tor_efeito')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('disp_portaria', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('id_lotacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servidor');
    }
}
