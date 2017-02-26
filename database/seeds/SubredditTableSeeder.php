<?php

use Illuminate\Database\Seeder;

class SubredditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subreddit::class, 50)->create()->each(function ($u) {
        $u->posts()->save(factory(App\Post::class)->make());
    });
    }
}
