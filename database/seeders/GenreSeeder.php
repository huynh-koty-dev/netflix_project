<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Khoa học viễn tưởng',
            ],
            [
                'name' => 'Lãng mạn',
            ],
            [
                'name' => 'Hài hước',
            ],
            [
                'name' => 'Kinh dị',
            ],
            [
                'name' => 'Võ thuật',
            ],
            [
                'name' => 'Phim hoạt hình',
            ],
            [
                'name' => 'Phim cổ trang',
            ],
            [
                'name' => 'Phim chiến tranh',
            ],
        ]);
    }
}
