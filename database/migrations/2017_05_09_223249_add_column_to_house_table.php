<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('house', function($table)
        {
            $table->integer('owner_id')->after('description')->unsigned()->nullable();
            $table->integer('address_id')->after('description')->unsigned()->nullable();

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('house', function(Blueprint $table) {
            $table->dropForeign('house_owner_id_foreign');
            $table->dropColumn('owner_id');
            $table->dropForeign('house_address_id_foreign');
            $table->dropColumn('address_id');
        });
    }
}
