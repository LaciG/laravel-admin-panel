<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdprStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gdpr_statistic', function (Blueprint $table) {
            $table->increments('id');

            $table->text('workers');
            $table->text('clients');
            $table->text('industry');
            $table->text('process');
            $table->text('law');
            $table->text('hr');
            $table->text('payroll');
            $table->text('it');
            $table->text('incident');
            $table->text('package');

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
        Schema::dropIfExists('gdpr_statistic');
    }
}
