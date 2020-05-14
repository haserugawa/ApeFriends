<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
			$table->id();
			$table->string('email')->references('email')->on('users');
			$table->string('name')->references('name')->on('users');
			$table->boolean('isset_profile_icon')->nullable();
			$table->string('self_introduction',1000)->nullable();
			$table->integer('platform')->nullable();
			$table->integer('fav_weapon')->references('code')->on('m_weapon')->nullable();
			$table->integer('main_character')->references('code')->on('m_character')->nullable();
			$table->integer('play_time')->references('code')->on('m_play_time')->nullable();
			$table->integer('play_style')->references('code')->on('m_play_style')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
