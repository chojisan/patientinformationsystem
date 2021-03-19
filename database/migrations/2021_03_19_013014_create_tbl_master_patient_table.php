<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMasterPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_master_patient', function (Blueprint $table) {
            $table->id();
            $table->string('master_patient_perm_id')->nullable();
            $table->string('pat_temp_id')->nullable();
            $table->string('pat_image')->nullable();
            $table->string('prefix_code');
            $table->string('pat_lname');
            $table->string('pat_fname');
            $table->string('pat_mname');
            $table->string('suffix_code');
            $table->char('sex_code');
            $table->date('pat_birthDate');
            $table->string('pat_birthplace')->nullable();
            $table->char('civil_stat_code')->nullable();
            $table->string('maiden_lastname')->nullable();
            $table->string('educattainment')->nullable();
            $table->string('occupation_code')->nullable();
            $table->string('date_of_effectivity')->nullable();
            $table->string('occupation_sp')->nullable();
            $table->string('phic_employer_no')->nullable();
            $table->string('phic_employer_name')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('nationality')->nullable();
            $table->string('tax_id_num')->nullable();
            $table->string('religion_code')->nullable();
            $table->char('IndigenousGroup')->nullable();
            $table->integer('ethnic_code')->nullable();
            $table->string('bloodtype_code')->nullable();
            $table->string('mot_fname')->nullable();
            $table->string('mot_lname')->nullable();
            $table->string('mot_mname')->nullable();
            $table->date('mot_birthdate')->nullable();
            $table->string('family_member_sp')->nullable();
            $table->string('country_code')->nullable();
            $table->string('pat_str')->nullable();
            $table->string('regcode');
            $table->string('provcode');
            $table->string('citycode');
            $table->string('bgycode');
            $table->integer('zipcode')->nullable();
            $table->text('patient_address')->nullable();
            $table->string('pat_email')->nullable();
            $table->string('pat_mobile')->nullable();
            $table->string('pat_landline')->nullable();
            $table->string('family_member_code')->nullable();
            $table->char('nhts')->nullable();
            $table->string('fhNumber')->nullable();
            $table->string('hhnumber')->nullable();
            $table->string('cct_nhts')->nullable();
            $table->string('fsNumber');
            $table->char('phic_member');
            $table->string('pat_philhealth')->nullable();
            $table->char('philhealth_status_code')->nullable();
            $table->char('pDependentType_code')->nullable();
            $table->string('pMemberLname')->nullable();
            $table->string('pMemberFname')->nullable();
            $table->string('pMemberMname')->nullable();
            $table->date('pMemberBdate')->nullable();
            $table->string('pMemberSuffix')->nullable();
            $table->char('pMemberSex')->nullable();
            $table->string('type_of_membership')->nullable();
            $table->string('phil_sub_code')->nullable();
            $table->char('PCB_nhts');
            $table->date('enlist_date')->nullable();
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
        Schema::dropIfExists('tbl_master_patient');
    }
}
