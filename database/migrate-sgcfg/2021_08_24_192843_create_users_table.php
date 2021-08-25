<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('name')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('email')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->rememberToken()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
