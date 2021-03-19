<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblConsultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_consult', function (Blueprint $table) {
            $table->id();
            $table->string('fhudcode');
            $table->string('pat_temp_id')->nullable();
            $table->char('consult_type_code');
            $table->string('to_consult_code');
            $table->date('consult_date');
            $table->time('consult_time');
            $table->integer('pat_age_yr');
            $table->integer('pat_age_mo');
            $table->integer('pat_age_dy');
            $table->string('mode_transac_code');
            $table->string('pat_height')->nullable();
            $table->string('pat_weight')->nullable();
            $table->string('pat_waist_circ')->nullable();
            $table->string('pat_BMI')->nullable();
            $table->string('BMI_cat_code')->nullable();
            $table->string('height_age_code')->nullable();
            $table->string('weight_age_code')->nullable();
            $table->string('personnel_temp_id');
            $table->string('chief_complaint')->nullable();
            $table->char('Patient_Concent_code');
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
        Schema::dropIfExists('tbl_consult');
    }
}
