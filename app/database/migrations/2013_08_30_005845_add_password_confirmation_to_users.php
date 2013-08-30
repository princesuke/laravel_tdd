<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class AddPasswordToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::table('users', function(Blueprint $table){
      $table->string('password');
      //$table->string('password_confirmation');
    });  
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  Schema::table('users', function(Blueprint $table){
      $table->dropColumn('password');
      //$table->dropColumn('password_confirmation');
    });  
	}

}
