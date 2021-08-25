<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLeftmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leftmenu', function (Blueprint $table) {
            $table->foreign('item')->references('id_leftmenu')->on('leftmenu')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leftmenu', function (Blueprint $table) {
            $table->dropForeign('leftmenu_item_foreign');
        });
    }
}
