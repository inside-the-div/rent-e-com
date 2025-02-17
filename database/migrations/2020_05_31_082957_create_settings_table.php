<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('fev_icon');
            $table->mediumText('description');
            $table->mediumText('tag');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->mediumText('location');
            $table->mediumText('facebook')->nullable();
            $table->mediumText('linkedin')->nullable();
            $table->mediumText('youtube')->nullable();
            $table->mediumText('instagram')->nullable();
            $table->mediumText('facebook_messenger')->nullable();
            $table->string('copyright');
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
        Schema::dropIfExists('settings');
    }
}
