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
            $table->longText('setting_data') -> nullable();
            $table->longText('about') -> nullable();
            $table->longText('service') -> nullable();
            $table->longText('experience') -> nullable();
            $table->longText('recent_works') -> nullable();
            $table->longText('pricing_plans') -> nullable();
            $table->longText('reviews') -> nullable();
            $table->longText('slikk_logo') -> nullable();
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
