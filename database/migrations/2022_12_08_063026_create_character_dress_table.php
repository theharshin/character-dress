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
        Schema::create('character_dress', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('character_id') ;
            $table->unsignedInteger('dress_id');
            $table->timestamp('created_at')->useCurrent();

            $table->index('character_id');
            $table->index('dress_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_dresse');
    }
};
