<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor, sit amet',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, voluptas laborum molestias ea facilis quaerat dignissimos repellat voluptatibus odit ipsam quasi vitae vel ipsa possimus dicta tempora reprehenderit a explicabo!</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor, sit amet',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, voluptas laborum molestias ea facilis quaerat dignissimos repellat voluptatibus odit ipsam quasi vitae vel ipsa possimus dicta tempora reprehenderit a explicabo!</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor, sit amet',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, voluptas laborum molestias ea facilis quaerat dignissimos repellat voluptatibus odit ipsam quasi vitae vel ipsa possimus dicta tempora reprehenderit a explicabo!</p>',
        ]);
    }
}
