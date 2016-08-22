<?php

use Illuminate\Database\Seeder;
//use 

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		factory(App\Post::class, 100)->create();
		// $faker = Faker\Factory::create();
		// foreach (range(1, 10) as $i){
		// 		$post = new \App\Post();
		// 		$post->title = $faker->
		// 		$post->url = 'http://php.codeup.com';
		// 		$post->context = 
		// 		$post->created_by = User::all()->random()->id;
		// 		$post->save();
			
		// }
	}
}