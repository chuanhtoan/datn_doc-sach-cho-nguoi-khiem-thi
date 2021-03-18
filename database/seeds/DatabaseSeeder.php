<?php

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
        $this->call(NovelSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(Novel_CategorySeeder::class);
        // $this->call(Chapter::class);
        // $this->call(Account::class);
        // $this->call(Comment::class);
        // $this->call(AnotherTitle::class);
        // $this->call(FollowList::class);
    }
}

class NovelSeeder extends Seeder{
    public function run()
    {
        DB::table('novel')->insert([
            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],

            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],

            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],

            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],

            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],

            ['title'=>'Solo leveling','author'=>'Chu-Gong','status'=>'Finished','type'=>'Novel','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://static.8cache.com/cover/eJzLyTDWD40yMrIoSM83NS90LfYxsygoibDIDQoriIzIyszNS8yuDE50rcjw9zKtKgxKcvGvjMoxKPcOqyo2twjI983Oc89OKs5K9M8xTUvLqyh3qSpOMzOxLTYAAIN1H6E=/solo-leveling-thang-cap-mot-minh-230420.jpg',
            'description'=>'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. Tuy nhiên, không phải tất cả Thợ Săn đều mạnh. Tên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! Vào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. Chuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!'],
        ]);
    }
}
