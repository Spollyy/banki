<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        User::create(array('email' => 'a@a.a', 'password' => Hash::make(123123)));
	}

}
