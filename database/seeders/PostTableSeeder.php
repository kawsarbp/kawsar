<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 20) as $index) {
            $name = $faker->name;
            $title = $faker->paragraph;
            Post::create([
                'user_id' => rand(1, 21),
                'category_id' => rand(1,12),
                'title' => $title,
                'slug' => strtolower(str_replace(' ', '-', $name)),
                'desc' => $faker->paragraphs(2,true),
                'photo' => $faker->imageUrl(),
                'status' => 'active'
            ]);
        }
    }
}
