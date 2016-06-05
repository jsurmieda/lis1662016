<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToCasedescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casedescriptions', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->after('casereport_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casedescription', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('user_id');
        });
    }
}
