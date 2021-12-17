<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('channel_id')->nullable();
            $table->integer('seek')->nullable();
            $table->text('song_name')->nullable();
            $table->text('song_url')->nullable();
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
        Schema::dropIfExists('player_info');
    }
}
