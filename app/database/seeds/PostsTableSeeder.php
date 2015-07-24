<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$thumbnails = ['D10euRxku8.png', 'eNGtB7bCco.png', 'nLMzPOo5h7.jpeg', 'VG2bGiFMoM.jpeg'];
		for($i=0; $i<30; $i++){
			$title = $faker->sentence(6);
			$description = $faker->paragraph(2);
			$body = $faker->paragraph(5);
			$category_id = rand(1, 5);
			$thumbnail = $thumbnails[rand(0,4)];
			Post::create([
				'title' => $title,
				'description' => $description,
				'body' => $body,
				'category_id' => $category_id,
				'thumbnail' => $thumbnail
			]);
		}

	}

}