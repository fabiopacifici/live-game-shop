<?php

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $new_post = new Post();
            $new_post->title = $faker->sentence(3);
            $new_post->body = $faker->paragraphs(4, true);
            $new_post->cover_image = 'https://picsum.photos/400/200';
            $new_post->save();
        }
    }
}
