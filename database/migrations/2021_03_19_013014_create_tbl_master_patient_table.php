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
            $table->string('master_patient_perm_id', 50)->nullable();
            $table->string('pat_temp_id', 50)->nullable();
            $table->string('pat_image', 250)->nullable();
            $table->string('prefix_code', 5);
            $table->string('pat_lname', 200);
            $table->string('pat_fname', 200);
            $table->string('pat_mname', 200);
            $table->string('suffix_code', 5);
            $table->char('sex_code', 10);
            $table->date('pat_birthDate');
            $table->string('pat_birthplace', 200)->nullable();
            $table->char('civil_stat_code', 1)->nullable();
            $table->string('maiden_lastname', 100)->nullable();
            $table->string('maiden_middlename', 100)->nullable();
            $table->string('educattainment', 2)->nullable();
            $table->string('occupation_code')->nullable();
            $table->string('date_of_effectivity', 50)->nullable();
            $table->string('occupation_sp', 250)->nullable();
            $table->string('phic_employer_no', 50)->nullable();
            $table->string('phic_employer_name')->nullable();
            $table->string('monthly_income', 100)->nullable();
            $table->string('nationality', 5)->nullable();
            $table->string('tax_id_num', 20)->nullable();
            $table->string('religion_code', 5)->nullable();
            $table->char('IndigenousGroup', 1)->nullable();
            $table->integer('ethnic_code')->nullable();
            $table->string('bloodtype_code', 11)->nullable();
            $table->string('mot_fname', 50)->nullable();
            $table->string('mot_lname', 50)->nullable();
            $table->string('mot_mname', 50)->nullable();
            $table->date('mot_birthdate')->nullable();
            $table->string('family_member_sp', 250)->nullable();
            $table->string('country_code', 5)->nullable();
            $table->string('pat_str', 100)->nullable();
            $table->string('regcode', 2);
            $table->string('provcode', 4);
            $table->string('citycode', 6);
            $table->string('bgycode', 9);
            $table->integer('zipcode')->nullable();
            $table->text('patient_address')->nullable();
            $table->string('pat_email', 50)->nullable();
            $table->string('pat_mobile', 23)->nullable();
            $table->string('pat_landline', 15)->nullable();
            $table->string('family_member_code', 20)->nullable();
            $table->char('nhts', 1)->nullable();
            $table->string('fhNumber', 100)->nullable();
            $table->string('hhnumber', 100)->nullable();
            $table->string('cct_nhts', 1)->nullable();
            $table->string('fsNumber', 100);
            $table->char('phic_member', 1);
            $table->string('pat_philhealth', 50)->nullable();
            $table->char('philhealth_status_code', 1)->nullable();
            $table->char('pDependentType_code', 1)->nullable();
            $table->string('pMemberLname')->nullable();
            $table->string('pMemberFname')->nullable();
            $table->string('pMemberMname')->nullable();
            $table->date('pMemberBdate')->nullable();
            $table->string('pMemberSuffix', 5)->nullable();
            $table->char('pMemberSex', 1)->nullable();
            $table->string('type_of_membership', 50)->nullable();
            $table->string('phil_sub_code', 50)->nullable();
            $table->char('PCB_nhts', 1);
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
