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
            $table->string('fhudcode', 19);
            $table->string('pat_temp_id', 50)->nullable();
            $table->char('consult_type_code', 5);
            $table->string('to_consult_code', 50);
            $table->date('consult_date');
            $table->time('consult_time');
            $table->integer('pat_age_yr');
            $table->integer('pat_age_mo');
            $table->integer('pat_age_dy');
            $table->string('mode_transac_code', 10);
            $table->string('pat_height', 10)->nullable();
            $table->string('pat_weight', 10)->nullable();
            $table->string('pat_waist_circ', 10)->nullable();
            $table->string('pat_BMI', 10)->nullable();
            $table->string('BMI_cat_code', 10)->nullable();
            $table->string('height_age_code', 10)->nullable();
            $table->string('weight_age_code', 10)->nullable();
            $table->string('personnel_temp_id', 30);
            $table->mediumText('chief_complaint')->nullable();
            $table->char('Patient_Concent_code', 1);
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
