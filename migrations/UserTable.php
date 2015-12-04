<?php

require_once(__DIR__."/../bootstrap/start.php");
use Illuminate\Database\Capsule\Manager as Capsule;
class UserTable {

	public static function up(){

		// Capsule::schema()->create('users', function($table)
		// {
		//     $table->increments('id');
		//     $table->string('name');
		// });



	}

	

	

}

UserTable::up();
User::create(['name' => 'Wii U']);


dd(Order::first()->toArray());
