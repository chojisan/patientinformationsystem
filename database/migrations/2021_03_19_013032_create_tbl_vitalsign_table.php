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
            $table->string('consult_temp_id', 30)->nullable();
            $table->integer('vitalsign_bpsystol')->nullable();
            $table->integer('vitalsign_bpdiasys')->nullable();
            $table->integer('vitalsign_rrrate')->nullable();
            $table->string('vitalsign_temperature', 10)->nullable();
            $table->string('vitalsign_heart_rate', 20)->nullable();
            $table->char('vitalsign_nr', 20)->nullable();
            $table->char('vitalsign_rr', 20)->nullable();
            $table->string('vitalsign_pulse_rate', 10)->nullable();
            $table->string('pat_temp_id', 50)->nullable();
            $table->string('vitalsign_oxsat', 10)->nullable();
            $table->time('time')->nullable();
            $table->time('vital_sign_time')->nullable();
            $table->string('vitalsign_bp_measurement_assessment_code', 50)->nullable();
            $table->string('med_intake', 1)->nullable();
            $table->string('personnel_temp_id', 50)->nullable();
            $table->mediumText('vitalsign_remarks')->nullable();
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
