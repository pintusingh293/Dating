<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->boolean('status')->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->string('seeking');
            $table->string('height');
            $table->string('marital_status');
            $table->string('body_type');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('language');
            $table->string('phone');
            $table->string('image');
            $table->string('partnerDependability');
            $table->string('occupation');
            $table->string('friendshipBetweenPartners');
            $table->string('income');
            $table->string('sexual_compatibility');
            $table->string('exercise');
            $table->string('longest_relationship');
            $table->string('education_level');
            $table->string('medication');
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
        Schema::dropIfExists('user_details');
    }
}
