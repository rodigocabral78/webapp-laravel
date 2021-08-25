<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('tokenable_type')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('tokenable_id');
            $table->string('name')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('token', 64)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->unique();
            $table->text('abilities')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->index(['tokenable_type', 'tokenable_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
