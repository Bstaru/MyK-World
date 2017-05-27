<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(group_seeder::class);
        $this->call(drama_seeder::class);
        $this->call(artist_seeder::class);
        $this->call(user_seeder::class);
    }
}
