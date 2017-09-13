<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UccilitySetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Needed to combine in one migration to handle relationships and references


        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('extension_name')->nullable();
            $table->string('gender');
            $table->string('civil_status');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('current_address');
            $table->string('permanent_address')->nullable();
            $table->string('photo')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('log_status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        // creates deparments table
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        // creates programs table
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id');
            $table->string('name');
            $table->string('description');
            
            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        // creates department heads table
        Schema::create('department_heads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('user_id');

            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');


        });

        // create coordinators table
        Schema::create('coordinators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('user_id');
            
            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        // create student assistants table
        Schema::create('student_assistants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('user_id');
            
            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        // create professors table
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('user_id');
            $table->string('employment_status');
            $table->string('campus');

            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        // create students table
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->string('student_number');
            $table->string('program');
            $table->string('year');
            $table->string('section');
            $table->string('campus');
            $table->string('status');

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('deparment_heads');
        Schema::dropIfExists('coordinators');
        Schema::dropIfExists('student_assistants');
        Schema::dropIfExists('professors');
        Schema::dropIfExists('students');
    }
}
