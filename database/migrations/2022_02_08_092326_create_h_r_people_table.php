<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHRPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_r_people', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('employee_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('cell_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('id_number')->nullable();
            $table->string('res_address')->nullable();
            $table->string('res_suburb')->nullable();
            $table->string('res_city')->nullable();
            $table->integer('res_postal_code')->nullable();
            $table->integer('res_province_id')->nullable();
            $table->integer('res_country_id')->nullable();
            $table->bigInteger('date_of_birth')->nullable();
            $table->smallInteger('gender')->nullable();
            $table->integer('ethnicity')->nullable();
            $table->string('profile_pic')->nullable();
            $table->smallInteger('status')->nullable();
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
        Schema::dropIfExists('h_r_people');
    }
}
