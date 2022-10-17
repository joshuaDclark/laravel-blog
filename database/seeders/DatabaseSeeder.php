<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);


        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // 

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);


        // $family =Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $work = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin libero nunc consequat interdum varius. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Fames ac turpis egestas maecenas pharetra convallis. Quam adipiscing vitae proin sagittis nisl rhoncus. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar.</p> '
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin libero nunc consequat interdum varius. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Fames ac turpis egestas maecenas pharetra convallis. Quam adipiscing vitae proin sagittis nisl rhoncus. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar.</p> '
        // ]);

    }
}
