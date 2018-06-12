<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier', function (Blueprint $table) {
            $table->increments('id');

            $table->text('job_title');
            $table->text('job_language');
            $table->text('job_description');
            $table->text('job_place');
            $table->text('job_type');
            $table->text('job_time');
            $table->text('job_level');
            $table->text('job_goodtoknow');
            $table->enum('job_active', ['Y', 'N'])->default('Y');
            $table->text('job_meta_description');
            $table->text('job_meta_keywords');

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
        Schema::dropIfExists('carrier');
    }
}
