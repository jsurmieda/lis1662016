<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToCasereportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casereports', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->after('originoffice_id');
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
        Schema::table('casereports', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('user_id');
        });
    }
}
