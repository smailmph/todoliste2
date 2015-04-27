<?php


class UsersTableSeeder extends Seeder {
	
	
	public function run()
	{
		
		User::truncate();
		
		
		User::create([
			'username' => 'smail',
			'email' => 'smail@gmail.com',
			'password' => 'liams',
		]);
		
		User::create([
			'username' => 'test',
			'email' => 'test@test',
			'password' => 'password',
		]);

	}
	
}