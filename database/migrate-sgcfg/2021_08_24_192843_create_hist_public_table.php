<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistPublicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_public', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_hist_public', true);
            $table->string('org_sigla', 20)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('org_nome', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pub_diario', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pub_descricao', 300)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pub_num_lei', 10)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pub_data', 40)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pub_pagina', 40)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('ane_tipo', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('ane_descricao_anexo', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('car_nome', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('sim_descricao', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->double('sim_salario');
            $table->integer('vag_quantidade');
            $table->integer('vag_ordem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_public');
    }
}
