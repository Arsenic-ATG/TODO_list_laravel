<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* DEBUG: deleting any pre-exsting table with similar name
           before creating a new one. */
        Schema::dropIfExists('tasks2');
        Schema::create('tasks2', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 50);
            $table->char('task', 200);
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('deadline')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
