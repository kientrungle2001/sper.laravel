<?php

use Illuminate\Database\Seeder;
use App\Review;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $imgs = [
            'http://www.baoxaydung.com.vn/stores/news_dataimages/nga/092018/01/08/083614baoxaydung_image001.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/21/212706baoxaydung_4.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/16/165319baoxaydung_60.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/16/165319baoxaydung_61.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/16/165319baoxaydung_62.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/16/163942baoxaydung_56.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102427baoxaydung_image001.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102427baoxaydung_image002.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102427baoxaydung_image003.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102427baoxaydung_image004.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102427baoxaydung_image005.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102428baoxaydung_image006.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102428baoxaydung_image007.jpg',
            'http://www.baoxaydung.com.vn/stores/news_dataimages/vananh/082018/31/10/102428baoxaydung_image008.jpg'
        ];
        $imgsEnd = count($imgs) - 1;
        $titles = [
            'Đà Nẵng đạt danh hiệu thành phố Xanh quốc gia Việt Nam',
            'Điều chỉnh quy hoạch sử dụng đất tỉnh Ninh Thuận',
            '2 năm xây nhà gỗ 30 tỷ của đại gia Hà Tĩnh',
            'Nhiệm vụ quy hoạch chung đô thị Hà Giang, tỉnh Hà Giang',
            'Vườn sân thượng như siêu thị mini của gia đình Hải Phòng',
            'Những mẫu phòng khách nhà đẹp kiểu châu Âu đẹp hút hồn',
            'Đẩy bến xe ra ngoại thành có khả thi?',
            'Những lưu ý khi trang trí không gian ngoài trời',
            'Những vấn đề đô thị cấp bách trong các thành phố lớn và giải pháp  Tin có video nhúng',
            'Bài toán bảo tồn bản sắc Côn Đảo',
            'Góp ý về Danh mục các khu vực cần thiết lập hành lang bảo vệ bờ biển tỉnh Bình Định',
            'Có cả ngàn cách trang trí cho ô cửa sổ lãng mạn, mộng mơ đến không ngờ',
            'Phong cách thiết kế cầu trượt trong nhà đẹp kiểu Nhật Bản',
            'Bộ Xây dựng góp ý về Đề án Điều chỉnh giảm diện tích Khu kinh tế cửa khẩu Bờ Y, tỉnh Kon Tum',
            'Khánh Hòa: Điều chỉnh cục bộ quy hoạch chung Khu du lịch Bắc bán đảo Cam Ranh',
            'Ngôi nhà cả năm không tốn xu nào tiền điện nước'
        ];
        $titlesEnd = count($titles) - 1;
        Review::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 150; $i++) {
            $review = [
                'review_title'    => $titles[rand(0, $titlesEnd)],
                'review_content'  => $faker->paragraph,
                'review_img'      => $imgs[rand(0, $imgsEnd)]
            ];
            $review['review_video'] = '';
            $review['review_views'] = rand(0, 100000);
            $review['review_comments'] = rand(0, 100);
            $review['review_shares'] = rand(0, 1000);
            $review['review_likes'] = rand(0, 10000);
            $review['review_alias'] = str_replace(' ', '_', $review['review_title']);
            $review['review_author'] = 'C5F84AFA-24DD-4B88-BD79-4239746338D4';
            $review['review_category_id'] = '0198FB52-D591-48A5-A968-3A82EFD7E9DA';
            Review::create($review);
            sleep(1);
        }
    }
}
