<?php


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('PostsTableSeeder');

		$this->command->info('Posts table seeded!');
	}

}

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->username = 'author';
		$user->password = Hash::make('111222');
		$user->save();
	}

}
