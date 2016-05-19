<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadtconditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadtconditions', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');   
            $table->boolean('cadteable');   
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
        Schema::drop('cadtconditions');
    }
}
