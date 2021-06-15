<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Loki Thần Lừa Lọc ',
            'img' => 'loki.jpg',
            'overview' => 'Khi Steve Rogers, Tony Stark và Scott Lang quay 
            trở về cột mốc 2012, ngay khi trận chiến ở New York kết thúc, để “mượn tạm” quyền trượng của Loki. 
            Nhưng một tai nạn bất ngờ xảy đến, khiến Loki nhặt được khối lặp phương Tesseract và tiện thể tẩu 
            thoát. Cuộc trốn thoát này đã dẫn đến dòng thời gian bị rối loạn. Cục TVA – tổ chức bảo vệ tính 
            nguyên vẹn của dòng chảy thời gian, buộc phải can thiệp, đi gô cổ ông thần này về làm việc. Tại đây, 
            Loki có hai lựa chọn, một là giúp TVA ổn định lại thời gian, không thì bị tiêu hủy. Dĩ nhiên Loki 
            chọn lựa chọn thứ nhất. Nhưng đây là nước đi vô cùng mạo hiểm, vì ông thần này thường lọc lừa, 
            “lươn lẹo”, chuyên đâm lén như bản tính tự nhiên của gã.',
            'popularity' => '',
            'release_date' => '2021',
            'runtime' => 52,
            'movie_status' => 'đang chiếu',
            'background' => 'loki.jpg',
            'votes_avg' => 81,
            'votes_count' => 0,
            'favourite_id' => 1,
            'vip' => 0,
        ]);

        DB::table('favourites')->insert([
            [
                'user_id' => 1,
                'favourite' => 0,
            ]
        ]);

        DB::table('movie_posters')->insert([
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

        DB::table('movie_casts')->insert([
            [
                'movie_id' => 1,
                'act_id' => 1,
            ],
            [
                'movie_id' => 1,
                'act_id' => 2,
            ],
            [
                'movie_id' => 1,
                'act_id' => 3,
            ],
            [
                'movie_id' => 1,
                'act_id' => 4,
            ],
            [
                'movie_id' => 1,
                'act_id' => 5,
            ],
            [
                'movie_id' => 1,
                'act_id' => 6,
            ],
            [
                'movie_id' => 1,
                'act_id' => 7,
            ],
            [
                'movie_id' => 1,
                'act_id' => 8,
            ],
        ]);

        DB::table('actors')->insert([
            [
                'act_name' => 'Tom Hiddleston',
                'act_role' => 'Loki',
                'act_gender' => 'male',
                'act_avatar' => 'loki.jpg',
            ],
            [
                'act_name' => 'Owen Wilson',
                'act_role' => 'Mobius M. Mobius',
                'act_gender' => 'male',
                'act_avatar' => 'owen_wilson.jpg',
            ],
            [
                'act_name' => 'Gugu Mbatha-Raw',
                'act_role' => 'Ravonna Renslayer',
                'act_gender' => 'female',
                'act_avatar' => 'gusu_mbatha-raw.jpg',
            ],
            [
                'act_name' => 'Wunmi Mosaku',
                'act_role' => 'Hunter B-15',
                'act_gender' => 'female',
                'act_avatar' => 'wunmi.jpg',
            ],
            [
                'act_name' => 'Eugene Cordero',
                'act_role' => 'Casey',
                'act_gender' => 'male',
                'act_avatar' => 'eugene.jpg',
            ],
            [
                'act_name' => 'Tara Strong',
                'act_role' => 'Miss Minutes',
                'act_gender' => 'female',
                'act_avatar' => 'tara_strong.jpg',
            ],
            [
                'act_name' => 'Sophia Di Martino',
                'act_role' => '__',
                'act_gender' => 'female',
                'act_avatar' => 'sophia.jpg',
            ],
            [
                'act_name' => 'Richard E. Grant',
                'act_role' => '__',
                'act_gender' => 'male',
                'act_avatar' => 'richard_e_grant.jpg',
            ],
        ]);

        DB::table('movie_genres')->insert([
            [
                'movie_id' => 1,
                'genre_id' => 1,
            ],
            [
                'movie_id' => 1,
                'genre_id' => 2,
            ],
        ]);

        DB::table('genres')->insert([
            [
                'genre_name' => 'Action & Adventure',
            ],
            [
                'genre_name' => ' Sci-Fi & Fantasy',
            ],
            [
                'genre_name' => 'Romantic',
            ],
        ]);

        DB::table('production_countries')->insert([
            [
                'movie_id' => 1,
                'country_id' => 1,
            ]
        ]);

        DB::table('countries')->insert([
            [
                'country_iso_code' => 'null',
                'country_name' => 'America',
            ],
        ]);
        
        DB::table('movie_roles')->insert([
            [
                'movie_id' => 1,
                'series_id' => 1,
            ]
        ]);

        DB::table('series')->insert([
            [
                'name' => 'Episodes 1',
                'path_video' => 'loki.mp4',
                'runtime' => 52,
                'release_date' => '2021',
                'role' => 1,
            ]
        ]);
    }
}
