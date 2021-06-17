<?php

namespace Database\Seeders;

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
        $this->call(ActorSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(EpisodeSeeder::class);
        $this->call(FavouriteSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(PosterSeeder::class);
        $this->call(UserSeeder::class);
    }
}
