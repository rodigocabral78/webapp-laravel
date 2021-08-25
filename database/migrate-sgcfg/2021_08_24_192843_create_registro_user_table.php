<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_user', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_registro_user', true);
            $table->integer('id_login')->index();
            $table->timestamp('data_hora')->useCurrentOnUpdate()->useCurrent();
            $table->string('descricao')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('nome', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('login', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_user');
    }
}
