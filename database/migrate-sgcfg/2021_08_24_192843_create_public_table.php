<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_public', true);
            $table->integer('id_orgao')->index();
            $table->string('diario', 200)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('descricao', 600)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('num_lei', 10)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('data', 40)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pagina', 40)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('situacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public');
    }
}
