<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasedescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casedescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('persons')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('relationship_id')->unsigned();
            $table->foreign('relationship_id')->references('id')->on('relationships')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('casereport_id')->unsigned();
            $table->foreign('casereport_id')->references('id')->on('casereports')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cadtcondition_id')->unsigned();
            $table->foreign('cadtcondition_id')->references('id')->on('cadtconditions')->onUpdate('cascade')->onDelete('cascade');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('casedescriptions');
    }
}
