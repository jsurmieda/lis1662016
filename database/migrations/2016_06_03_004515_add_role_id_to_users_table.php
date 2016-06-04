<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('originoffice_id')->unsigned();
            $table->foreign('originoffice_id')->references('id')->on('originoffices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('role_id');
            $table->dropColumn('originoffice_id');
            $table->dropColumn('originoffice_id');
        });
    }
}
