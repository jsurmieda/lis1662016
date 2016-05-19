<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Practi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('relationships', function (Blueprint $table) {
			$table->increments('id');
			$table->string('rel_type');
			$table->timestamps();
            $table->softDeletes();
			 });	 
			 
		Schema::create('case_types', function (Blueprint $table) {
			$table->increments('id');
            $table->string('case_type_name');   
            $table->timestamps();
            $table->softDeletes();
			 });


		Schema::create('note_qualifiers', function (Blueprint $table) {
			$table->increments('id');
            $table->string('note_type');
            $table->timestamps();
            $table->softDeletes();
			 });
			
		Schema::create('origin_offices', function (Blueprint $table) {
			$table->increments('id');	//each csc is described by unique integer primary key
            $table->string('csc_name');
 			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('cadt_conditions', function(Blueprint $table)   {
			$table->increments('id');
            $table->date('date');   
            $table->boolean('cadteable');   
            $table->integer('origin_office_id')->unsigned();   
			$table->foreign('origin_office_id')->references('id')->on('origin_offices')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
            $table->softDeletes();
			});
			 
		Schema::create('case_reports', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('cadt_condition_id')->unsigned();
			$table->foreign('cadt_condition_id')->references('id')->on('cadt_conditions')->onUpdate('cascade')->onDelete('cascade');
            $table->date('receipt_date');  
			$table->string('info_source');
			$table->string('incident_location');
			$table->string('incident_date');
			$table->integer('case_type_id')->unsigned();
			$table->foreign('case_type_id')->references('id')->on('case_types')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('origin_office_id')->unsigned();
			$table->foreign('origin_office_id')->references('id')->on('origin_offices')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('tribes', function (Blueprint $table) {
			$table->increments('id');
            $table->string('tribe_name');
            $table->integer('cadt_condition_id')->unsigned();
			$table->foreign('cadt_condition_id')->references('id')->on('cadt_conditions')->onUpdate('cascade')->onDelete('cascade');						
			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('persons', function (Blueprint $table) {
			$table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
			$table->string('middlename');
            $table->string('suffix');
			$table->string('address');
            $table->integer('tribe_id')->unsigned();
			$table->foreign('tribe_id')->references('id')->on('tribes')->onUpdate('cascade')->onDelete('cascade');			
			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('case_descriptions', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('id')->on('persons')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('relationship_id')->unsigned();
			$table->foreign('relationship_id')->references('id')->on('relationships')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('case_report_id')->unsigned();
			$table->foreign('case_report_id')->references('id')->on('case_reports')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cadt_condition_id')->unsigned();
			$table->foreign('cadt_condition_id')->references('id')->on('cadt_conditions')->onUpdate('cascade')->onDelete('cascade');			
 			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('case_notes', function (Blueprint $table) {
			$table->increments('id');            
            $table->date('date');
            $table->string('notes');
			$table->integer('note_qualifier_id')->unsigned();
			$table->foreign('note_qualifier_id')->references('id')->on('note_qualifiers')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('case_report_id')->unsigned();
			$table->foreign('case_report_id')->references('id')->on('case_reports')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('cadt_condition_id')->unsigned();
			$table->foreign('cadt_condition_id')->references('id')->on('cadt_conditions')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
            $table->softDeletes();
			 });
			 
		Schema::create('articles', function(Blueprint $table)   {
			$table->increments('id');
            $table->string('title');   
            $table->boolean('mandatory');   
            $table->string('body');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();
            $table->softDeletes();
			});
    }
	
	//di ko pa nilagay yung users table na may CSC foreign key and yung other auxiliary tables

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('relationships');
		Schema::drop('case_types');
		Schema::drop('note_qualifiers');
		Schema::drop('origin_offices');
		Schema::drop('cadt_conditions');
		Schema::drop('case_reports');
		Schema::drop('persons');
		Schema::drop('case_descriptions');
		Schema::drop('case_notes');
		Schema::drop('articles');
    }
}
