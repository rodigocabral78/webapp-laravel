<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_user', true);
            $table->string('login', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->unique();
            $table->string('senha', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('nome', 150)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('ativo');
            $table->integer('id_orgao');
            $table->integer('primeira');
            $table->integer('permitir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
