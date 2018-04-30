<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('department_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('dob');
            $table->date('hiring_date');
            $table->date('leaving_date');
            $table->integer('phone');
            $table->text('address');
            $table->boolean('status');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
