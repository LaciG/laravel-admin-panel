<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->increments('id');

            $table->text('apply_name');
            $table->text('apply_email');
            $table->text('apply_mobile');
            $table->text('apply_job');
            $table->text('apply_salary');
            $table->text('apply_resume');
            $table->enum('apply_status', ['registered', 'underwork', 'accepted', 'rejected']);

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
        Schema::dropIfExists('job_applies');
    }
}
