<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeftmenuUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leftmenu_user', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->integer('id_leftmenu', true);
            $table->string('nome', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('link', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('pagina', 60)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('subitem');
            $table->integer('item')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leftmenu_user');
    }
}
