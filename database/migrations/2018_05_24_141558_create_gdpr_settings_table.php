<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdprSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gdpr_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->text('workers');
            $table->text('clients');
            $table->string('Light', 11);
            $table->string('Standard', 11);
            $table->string('Enterprise', 11);
            $table->string('Követés', 11);
            $table->integer('DPO');
            $table->integer('Biztonság', 11);
            $table->string('daily_price', 11);
            $table->string('follow_price', 11);

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
        Schema::dropIfExists('gdpr_settings');
    }
}
