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
            'overview' => 'Khi Steve Rogers, Tony Stark và Scott Lang quay trở về cột mốc 2012, ngay khi trận 
            chiến ở New York kết thúc, để “mượn tạm” quyền trượng của Loki. Nhưng một tai nạn bất ngờ xảy đến, 
            khiến Loki nhặt được khối lặp phương Tesseract và tiện thể tẩu thoát. Cuộc trốn thoát này đã dẫn đến 
            dòng thời gian bị rối loạn. Cục TVA – tổ chức bảo vệ tính nguyên vẹn của dòng chảy thời gian, buộc 
            phải can thiệp, đi gô cổ ông thần này về làm việc. Tại đây, Loki có hai lựa chọn, một là giúp TVA ổn 
            định lại thời gian, không thì bị tiêu hủy. Dĩ nhiên Loki chọn lựa chọn thứ nhất. Nhưng đây là nước 
            đi vô cùng mạo hiểm, vì ông thần này thường lọc lừa, “lươn lẹo”, chuyên đâm lén như bản tính tự nhiên 
            của gã.',
            'img' => 'loki.jpg',
            'background' => 'loki.jpg',
            'release_date' => '2021',
            'runtime' => 0,
            'num_view' => 456723,
            'votes_avg' => 88,
            'type_movie' => 1,
            'actor_id' => 1,
            'genre_id' => 1,
            'country_id' => 1,
            'company_id' => 1,
            'favourite_id' => 1,
            'author' => 'Michael Waldron',
        ]);
    }
}
