<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'movie_id' => 1,
                'act_name' => 'Tom Hiddleston',
                'act_role' => 'Loki Laufeyson',
                'act_gender' => 'male',
                'act_avatar' => 'loki.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Owen Wilson',
                'act_role' => 'Mobius M. Mobius ',
                'act_gender' => 'male',
                'act_avatar' => 'owen_wilson.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Sophia Di Martino',
                'act_role' => 'The Variant',
                'act_gender' => 'female',
                'act_avatar' => 'sophia.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Gugu Mbatha-Raw',
                'act_role' => 'Ravonna Renslayer ',
                'act_gender' => 'female',
                'act_avatar' => 'gusu_mbatha-raw.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Wunmi Mosaku',
                'act_role' => 'Hunter B-15',
                'act_gender' => 'female',
                'act_avatar' => 'wunmi.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Eugene Cordero',
                'act_role' => 'Casey ',
                'act_gender' => 'male',
                'act_avatar' => 'eugene.jpg',
            ],
            [
                'movie_id' => 1,
                'act_name' => 'Tara Strong',
                'act_role' => 'Miss Minutes ',
                'act_gender' => 'female',
                'act_avatar' => 'tara_strong.jpg',
            ],
        ]);
    }
}
