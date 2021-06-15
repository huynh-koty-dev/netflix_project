<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posters')->insert([
            [
                'movie_id' => 1,
                'path_poster' => 'loki.jpg',
            ],
            [
                'movie_id' => 1,
                'path_poster' => 'loki2.jpg',
            ],
            [
                'movie_id' => 1,
                'path_poster' => 'loki3.jpg',
            ],
        ]);
    }
}
