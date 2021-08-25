<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('uuid')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->unique();
            $table->text('connection')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->text('queue')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->longText('payload')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->longText('exception')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
