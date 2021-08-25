<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarSimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car_sim', function (Blueprint $table) {
            $table->foreign('id_cargos')->references('id_cargos')->on('cargos');
            $table->foreign('id_simbol')->references('id_simbol')->on('simbol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_sim', function (Blueprint $table) {
            $table->dropForeign('car_sim_id_cargos_foreign');
            $table->dropForeign('car_sim_id_simbol_foreign');
        });
    }
}
