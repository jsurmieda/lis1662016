<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasenotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casenotes', function (Blueprint $table) {
            $table->increments('id');            
            $table->date('date');
            $table->string('notes');
            $table->integer('notequalifier_id')->unsigned();
            $table->foreign('notequalifier_id')->references('id')->on('notequalifiers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('casenotes');
    }
}
