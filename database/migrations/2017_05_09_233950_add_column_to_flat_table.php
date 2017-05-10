<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToFlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flat', function($table)
        {
            $table->integer('house_id')->after('description')->unsigned();

            $table->foreign('house_id')->references('id')->on('house');
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
            $table->dropForeign('flat_house_id_foreign');
            $table->dropColumn('house_id');
        });
    }
}
