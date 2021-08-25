<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistServTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_serv', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_historico', true);
            $table->string('login', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('acao')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->timestamp('data_hora')->nullable();
            $table->string('orgao', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('sigla', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('public_diario', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('public_descricao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('anexo_tipo', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('anexo_descricao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('cargos_nome', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('simbol_descricao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('cpf', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('matricula', 40)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('nome', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('situacao');
            $table->integer('vinculo')->nullable();
            $table->string('funcao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->double('vencimento')->nullable();
            $table->double('gratificacao')->nullable();
            $table->string('dt_nomeacao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('num_diario', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_posse', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_decreto', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('num_portaria', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_portaria', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_contar', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_dt_decreto', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_num_diario', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('exo_dt_diario', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_inicio', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('dt_termino', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('observacao')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('tor_efeito')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('lotacao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_serv');
    }
}
