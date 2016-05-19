<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasereportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casereports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cadtcondition_id')->unsigned();
            $table->foreign('cadtcondition_id')->references('id')->on('cadtconditions')->onUpdate('cascade')->onDelete('cascade');
            $table->date('receiptDate');  
            $table->string('infoSource');
            $table->string('incidentLocation');
            $table->date('incidentDate');
            $table->integer('casetype_id')->unsigned();
            $table->foreign('casetype_id')->references('id')->on('casetypes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('originoffice_id')->unsigned();
            $table->foreign('originoffice_id')->references('id')->on('originoffices')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('casereports');
    }
}
