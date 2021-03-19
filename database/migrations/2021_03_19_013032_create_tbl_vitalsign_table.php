<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVitalsignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vitalsign', function (Blueprint $table) {
            $table->id();
            $table->string('consult_temp_id')->nullable();
            $table->integer('vitalsign_bpsystol')->nullable();
            $table->integer('vitalsign_bpdiasys')->nullable();
            $table->integer('vitalsign_rrrate')->nullable();
            $table->string('vitalsign_temperature')->nullable();
            $table->string('vitalsign_heart_rate')->nullable();
            $table->char('vitalsign_nr')->nullable();
            $table->char('vitalsign_rr')->nullable();
            $table->string('vitalsign_pulse_rate')->nullable();
            $table->string('pat_temp_id')->nullable();
            $table->string('vitalsign_oxsat')->nullable();
            $table->time('time')->nullable();
            $table->time('vital_sign_time')->nullable();
            $table->string('vitalsign_bp_measurement_assessment_code')->nullable();
            $table->string('med_intake')->nullable();
            $table->string('personnel_temp_id')->nullable();
            $table->text('vitalsign_remarks')->nullable();
            $table->date('date_entered');
            $table->time('time_entered');
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
        Schema::dropIfExists('tbl_vitalsign');
    }
}
