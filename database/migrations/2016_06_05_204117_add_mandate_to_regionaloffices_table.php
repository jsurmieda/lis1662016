<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMandateToRegionalofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('regionaloffices', function (Blueprint $table) {
            $table->string('mandate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('regionaloffices', function (Blueprint $table) {
            $table->dropColumn('mandate');
        });
    }
}
