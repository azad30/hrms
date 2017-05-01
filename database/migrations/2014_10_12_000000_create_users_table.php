<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('username', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->date('dob');
            $table->string('gender', 10);
            $table->string('marital_status', 20);
            $table->string('religion', 50);
            $table->string('occupation', 50);
            $table->string('occupation_details', 500);
            $table->string('educational_qualification', 500)->nullable();
            $table->string('phone_number', 100);
            $table->string('nid', 50)->unique();
            $table->string('passport_number', 50)->nullable();
            $table->string('tin_number', 50)->nullable();
            $table->string('permanent_address', 500);
            $table->string('emergency_contact', 100);
            $table->tinyInteger('active');

            $table->integer('updated_by')->nullable()->unsigned();

            $table->foreign('updated_by')->references('id')->on('users');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
