<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phims')->insert([
            [
                'id' => 1,
                'ten' => 'PHÙ THỦY TỐI THƯỢNG TRONG ĐA VŨ TRỤ HỖN LOẠN',
                'thoiluong' => 126,
                'dien_vien' => 'Benedict Cumberbatch, Elizabeth Olsen Rachel McAdams',
                'tom_tat' => 'Sau các sự kiện của Avengers: Endgame, Tiến sĩ Stephen Strange tiếp tục nghiên cứu về Viên đá Thời gian. Nhưng một người bạn cũ đã trở thành kẻ thù tìm cách tiêu diệt mọi phù thủy trên Trái đất, làm xáo trộn kế hoạch của Strange và cũng khiến anh ta mở ra một tội ác khôn lường.',
                'poster' => 'images/posters/phim_poster_1.jpg',
                'thumbnail' => 'images/posters/phim_poster_1.jpg',
                'dao_dien' => 'Sam Raimi',
                'trailer' => 'https://www.youtube.com/embed/nBNtRvpCmms',
                'ngay_chieu' => date('Y-m-d',strtotime('04-05-2022')),
            ],
            [
                'id' => 2,
                'ten' => 'HARRY POTTER VÀ HÒN ĐÁ PHÙ THỦY (RE-RUN)',
                'thoiluong' => 85,
                'dien_vien' => 'Daniel Radcliffe, Rupert Grint, Emma Watson, Tom Felton',
                'tom_tat' => 'Chuyển thể của phần đầu tiên của cuốn tiểu thuyết dành cho thiếu nhi nổi tiếng của tác giả J.K.Rowling, cậu bé Harry Potter vào sinh nhật lần thứ 11 rằng bố mẹ cậu là hai vị phù thủy nổi tiếng. Bản thân cậu sở hữu phép thuật và năng lực mà ai cũng mong muốn có được sau khi sống sót khỏi Chúa tể Voldermort. Từ cuộc sống của một đứa trẻ mồ côi, cậu trở thành một học sinh tại ngôi trường phù thủy danh giá Hogwarts. Tại đây, cậu đã tìm được những người bạn thân nhất của mình và giúp cậu khám phá ra sự thật về cái chết bí ẩn của cha mẹ mình.',
                'poster' => 'images/posters/phim_poster_2.jpg',
                'thumbnail' => 'images/posters/phim_poster_2.jpg',
                'dao_dien' => 'Chris Columbus',
                'trailer' => 'https://www.youtube.com/embed/lzZ_Z1Sfczg',
                'ngay_chieu' => date('Y-m-d',strtotime('20-05-2022')),
            ],
            [
                'id' => 3,
                'ten' => 'NGHỀ SIÊU DỄ',
                'thoiluong' => 113,
                'dien_vien' => 'Hứa Vĩ Văn, Thu Trang, Kiều Minh Tuấn, Tiến Luật, Huỳnh Phương, Quang Tuấn, Vũ Ngọc Anh, Thanh Mỹ',
                'tom_tat' => 'Ông Thái là một cảnh sát về hưu nhưng không chịu an phận thủ thường, hàng ngày vẫn đi tìm bắt tội phạm vặt trong xóm cho 
                đỡ nhớ nghề. Một ngày kia, Hoàng - tên trùm ma túy mới ra tù bỗng dưng chuyển đến xóm ông và mở một văn phòng bất động sản. Nghi ngờ đây 
                là nơi làm ăn phi pháp, ông Thái quyết định âm thầm điều tra. Ông mua lại tiệm cơm tấm đối diện trụ sở của Hoàng để làm nơi theo dõi, đồng
                thời thu nạp Thu - Phú - Vinh - Mèo, đám thanh niên “bất hảo” trong xóm về quán hỗ trợ buôn bán để rảnh tay "phá án". Trớ trêu thay, tiệm
                cơm bất ngờ nổi tiếng và ăn nên làm ra, khiến cho "chuyên án đặc biệt" của ông đứng trước nguy cơ đổ bể.',
                'poster' => 'images/posters/phim_poster_3.jpg',
                'thumbnail' => 'images/posters/phim_poster_3.jpg',
                'dao_dien' => 'Võ Thanh Hòa',
                'trailer' => 'https://www.youtube.com/embed/1anBxcsV5b8',
                'ngay_chieu' => date('Y-m-d',strtotime('29-04-2022')),
            ]
        ]);
    }
}
