<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episode' => 1,
            'episode_name' => 'Tập 1',
            'content' => '',
            'runtime' => 52,
            'path_video' => 'loki.mp4',
        ]);
    }
}
