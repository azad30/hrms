<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->boolean('owner_approve')->nullable();
            $table->boolean('renter_approve')->nullable();
            $table->boolean('admin_approve')->nullable();

            $table->integer('renter_id')->unsigned();
            $table->integer('flat_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('renter_id')->references('id')->on('users');
            $table->foreign('flat_id')->references('id')->on('flat');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('rents');
    }
}
