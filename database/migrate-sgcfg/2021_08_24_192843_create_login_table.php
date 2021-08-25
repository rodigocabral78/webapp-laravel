<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_login', true);
            $table->string('login', 50)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('senha', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('nome', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->integer('nivel');
            $table->integer('status');
            $table->integer('primeira');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}
