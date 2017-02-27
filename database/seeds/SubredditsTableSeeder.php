<?php

use Illuminate\Database\Seeder;

class SubredditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subreddit::class, 10)->create();
    }
}
