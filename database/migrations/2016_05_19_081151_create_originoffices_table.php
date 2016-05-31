<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('originoffices', function (Blueprint $table) {
            $table->increments('id'); //each csc is described by unique integer primary key
            $table->string('csc_name');
            $table->integer('regionalOffice_id')->unsigned(); 
            $table->foreign('regionalOffice_id')->references('id')->on('regionalOffices')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('originoffices');
    }
}
