<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgao', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->integer('id_orgao', true);
            $table->integer('cod_orgao')->unique();
            $table->string('sigla', 20)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->unique();
            $table->string('cnpj', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('nome', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('endereco', 300)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('bairro', 300)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('cep', 20)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('fone', 30)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('ramal', 15)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('fax', 30)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('site', 300)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('email', 300)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('adm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orgao');
    }
}
