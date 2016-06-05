<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressAndContactToRegionalofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regionaloffices', function (Blueprint $table) {
            $table->string('address');
            $table->string('contact_number');
            $table->string('website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('regionaloffices', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('contact_number');
            $table->dropColumn('website');
        });
    }
}
