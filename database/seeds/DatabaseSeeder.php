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
        // $this->call(Account::class);
        // $this->call(NovelSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(Novel_CategorySeeder::class);
        $this->call(Chapter::class);
        // $this->call(FollowList::class);
        // $this->call(Comment::class);
        // $this->call(AnotherTitle::class);
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

class CategorySeeder extends Seeder{
    public function run()
    {
        DB::table('category')->insert([
            ['name'=>'Action',       'description'=>'Thể loại này thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh'],
            ['name'=>'Adventure',    'description'=>'Thể loại phiêu lưu, mạo hiểm, thường là hành trình của các nhân vật'],
            ['name'=>'Cars',         'description'=>'Thể loại có nội dung về xe cộ'],
            ['name'=>'Comedy',       'description'=>'Thể loại có nội dung trong sáng và cảm động, thường có các tình tiết gây cười, các xung đột nhẹ nhàng'],
            ['name'=>'Dementia',     'description'=>'Thể loại có nội dung về khủng hoảng thần kinh'],

            ['name'=>'Demons',       'description'=>'Thể loại có nội dung về quỷ'],
            ['name'=>'Drama',        'description'=>'Thể loại mang đến cho người xem những cảm xúc khác nhau: buồn bã, căng thẳng thậm chí là bi phẫn'],
            ['name'=>'Ecchi',        'description'=>'Thể loại thường có những tình huống nhạy cảm nhằm lôi cuốn người xem'],
            ['name'=>'Fantasy',      'description'=>'Thể loại xuất phát từ trí tưởng tượng phong phú, từ pháp thuật đến thế giới trong mơ thậm chí là những câu chuyện thần tiên'],
            ['name'=>'Game',         'description'=>'Thể loại có nội dung về các trò chơi'],

            ['name'=>'Harem',        'description'=>'Thể loại nhân vật chính có nhiều người yêu'],
            ['name'=>'Historical',   'description'=>'Thể loại có nội dung về lịch sử'],
            ['name'=>'Horror',       'description'=>'Thể loại kinh dị, nó làm cho bạn kinh hãi, khiếp sợ, ghê tởm, run rẩy, có thể gây sock - một thể loại không dành cho người yếu tim'],
            ['name'=>'Josei',        'description'=>'Thể loại của manga hay anime được sáng tác chủ yếu bởi phụ nữ cho những độc giả nữ từ 18 đến 30. Josei manga có thể miêu tả những lãng mạn thực tế , nhưng trái ngược với hầu hết các kiểu lãng mạn lí tưởng của Shoujo manga với cốt truyện rõ ràng, chín chắn'],

            ['name'=>'Kids',         'description'=>'Thể loại có nội dung dành cho trẻ em'],
            ['name'=>'Magic',        'description'=>'Thể loại có nội dung về phép thuật'],
            ['name'=>'Martial Arts', 'description'=>'Thể loại võ thuật, bao gồm bất cứ thứ gì liên quan đến võ thuật từ các trận đánh nhau, tự vệ đến các môn võ thuật như akido, karate, judo hay taekwondo, kendo, các cách né tránh'],
            ['name'=>'Mecha',        'description'=>'Còn được biết đến dưới cái tên meka hay mechs, là thể loại nói tới những cỗ máy biết đi (thường là do phi công cầm lái)'],
            ['name'=>'Military',     'description'=>'Thể loại có nội dung về quân đội'],

            ['name'=>'Music',        'description'=>'Thể loại có nội dung về âm nhạc'],
            ['name'=>'Mystery',      'description'=>'Thể loại thường xuất hiện những điều bí ấn không thể lí giải được và sau đó là những nỗ lực của nhân vật chính nhằm tìm ra câu trả lời thỏa đáng'],
            ['name'=>'Parody',       'description'=>'Thể loại bắt chước'],
            ['name'=>'Police',       'description'=>'Thể loại có nội dung về cảnh sát'],
            ['name'=>'Psychological','description'=>'Thể loại liên quan đến những vấn đề về tâm lý của nhân vật (tâm thần bất ổn, điên cuồng,...)'],

            ['name'=>'Romance',      'description'=>'Thể loại có nội dung về tình cảm'],
            ['name'=>'Samurai',      'description'=>'Thể loại có nội dung về các kiếm sĩ'],
            ['name'=>'School',       'description'=>'Thể loại có bối cảnh chủ yếu ở trường học'],
            ['name'=>'Sci-Fi',       'description'=>'Thể loại bao gồm những chuyện khoa học viễn tưởng, đa phần chúng xoay quanh nhiều hiện tượng mà liên quan tới khoa học, công nghệ, tuy vậy thường thì những câu chuyện đó không gắn bó chặt chẽ với các thành tựu khoa học hiện thời, mà là do con người tưởng tượng ra'],
            ['name'=>'Seinen',       'description'=>'Thể loại '],

            ['name'=>'Shoujo',       'description'=>'Đối tượng hướng tới của thể loại này là phái nữ. Nội dung của những bộ manga này thường liên quan đến tình cảm lãng mạn, chú trọng đầu tư cho nhân vật (tính cách,...)'],
            ['name'=>'Shoujo Ai',    'description'=>'Thể loại liên quan tới đồng tính nữ, thể hiện trong các mối quan hệ trên mức bình thường giữa các nhân vật nữ trong các manga, anime'],
            ['name'=>'Shounen',      'description'=>'Đối tượng hướng tới của thể loại này là phái nam. Nội dung của những bộ manga này thường liên quan đến đánh nhau và/hoặc bạo lực (ở mức bình thường, không thái quá)'],
            ['name'=>'Shounen Ai',   'description'=>'Thể loại liên quan tới đồng tính nam, thể hiện trong các mối quan hệ trên mức bình thường giữa các nhân vật nam trong các manga, anime'],
            ['name'=>'Slice of Life','description'=>'Thể loại nói về cuộc sống đời thường'],

            ['name'=>'Space',        'description'=>'Thể loại có bối cảnh ngoài không gian'],
            ['name'=>'Sports',       'description'=>'Thể loại liên quan tới các môn thể thao như bóng đá, bóng chày, bóng chuyền, đua xe, cầu lông,...'],
            ['name'=>'Super Power',  'description'=>'Thể loại có nội dung về sức mạnh đặt biệt'],
            ['name'=>'Supernatural', 'description'=>'Thể loại có nội dung thể hiện những sức mạnh đáng kinh ngạc và không thể giải thích được, chúng thường đi kèm với những sự kiện trái ngược hoặc thách thức với những định luật vật lý'],
            ['name'=>'Thriller',     'description'=>'Thể loại có nội dung liên quan tới phim kinh dị'],

            ['name'=>'Vampire',      'description'=>'Thể loại có nội dung liên quan tới ma cà rồng'],
            ['name'=>'Yaoi',         'description'=>'Thể loại liên quan tới đồng tính nam, nặng hơn Shounen Ai'],
            ['name'=>'Yuri',         'description'=>'Thể loại liên quan tới đồng tính nữ, nặng hơn Shoujo Ai'],
        ]);
    }
}

class Novel_CategorySeeder extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 5; $i++) {
            DB::table('novel_category')->insert([
                ['novelID'=>$i,'categoryID'=>rand(1,10)],
                ['novelID'=>$i,'categoryID'=>rand(11,20)],
                ['novelID'=>$i,'categoryID'=>rand(21,30)],
                ['novelID'=>$i,'categoryID'=>rand(31,42)],
            ]);
        }
    }
}

class Chapter extends Seeder{
    public function run()
    {
        DB::table('chapter')->insert([
            ['novelID'=>1, 'number'=>0,
            'content'=>'
                [Nhiệm vụ hàng ngày bắt đầu]
                Một giọng nữ trôi chảy và trong trẻo vang lên.
                Đây chắc chắn không phải một trò chơi, cũng không phải một giấc mơ.
                Giọng nói ấy xuất hiện trong đầu cậu. Thậm chí còn có một màn hình nhiệm vụ lơ lửng trước mặt đợi cậu truy cập.
                “Không thể nào… Hôm nay cũng vậy ư?“
                Cậu thở dài rồi mở bảng nhiệm vụ lên.
                Ring~ ring ~
                Nhiệm vụ hàng ngày: Chuẩn bị để trở nên mạnh hơn.
                Chống đẩy 100 lần: (Chưa hoàn thành) (0/100)
                Nhảy cóc 100 lần: (Chưa hoàn thành) (0/100)
                Squat 100 lần: (Chưa hoàn thành) (0/100)
                Chạy 10km: (Chưa hoàn thành) (0/10)
                *Cảnh báo: Nếu bạn không hoàn thành nhiệm vụ hàng ngày, bạn sẽ nhận một hình phạt tương ứng.
                Cậu ta nguyền rủa khi xác nhận lại nhiệm vụ.
                “Khỉ thật, nó kéo dài bao lâu đây hả trời!”
            '],
            ['novelID'=>1, 'number'=>1,
            'content'=>'
                “Thợ săn hạng E” Sung Jinwoo.
                Danh hiệu ấy theo anh ta đến mọi nơi.
                Dù là một Thợ Săn, năng lực của anh ta chỉ hơn người thường một chút. Nếu không có khả năng chịu đựng và khả năng hồi phục cao hơn chút xíu, thì anh ta cũng chẳng khác người thường là bao. Thành ra, sự nghiệp làm Thợ Săn của anh ta gắn liền với vô số thương tích. Thậm chí vài lần anh ta đặt chân đến ranh giới giữa sự sống và cái chết.
                Jinwoo không trở thành Thợ Săn vì yêu thích công việc đó.
                Một công việc nguy hiểm, cam go, mà thu nhập thì đáng thất vọng.
                Không. Nếu không phải vì Hiệp hội Thợ Săn hỗ trợ chi trả viện phí cho mẹ anh ta, có lẽ Jinwoo đã từ bỏ và chọn một nghề bình thường như bao người khác rồi.
                Khổ nỗi, một chàng trai tuổi đôi mươi như anh ta, không có tài năng lẫn người “chống lưng”, làm sao trang trải nổi viện phí giá vài triệu Won mỗi tháng?
                Có thể nói. anh ta chẳng có lựa chọn nào khác.
                Và rồi, như mọi ngày, với trái tim đang khóc thầm, Jinwoon tham gia vào một cuộc đột kích do Hiệp hội giám sát.
                —
                Các Thợ Săn trong cùng khu vực đều biết rõ nhau, bởi họ đều tập trung mỗi khi một Cổng mở ra. Và hôm nay, những Thợ Săn tụ tập trước cổng, vừa uống cà phê vừa chào hỏi lẫn nhau.
                “Ôi, anh Kim! Bên này nè”
                “Ồ, Park! Anh đang làm gì ở đây vậy? Tôi tưởng anh bỏ nghề rồi chứ.”
                “À… Vợ tôi vừa mang thai đứa con thứ hai”
                “Hahaha, vậy sao? Ừ, cách tốt nhất để lấp đầy túi một thợ săn là tham gia đột kích mà!”
                Cả hai cùng cười lớn.
                “Anh có để ý không, hình như gần đây Hiệp hội ngày càng ít gọi chúng ta. Phải chăng số lượng Cổng xuất hiện đã giảm đi?”
                “Ể. Làm gì có. Tại gần đây các Công hội đã tích cực hoạt động hơn Hiệp hội. Mỗi lần có cơ hội vớ bẫm là các Công hội lại nhảy dựng lên với đô mắt rực lửa.”
                “Ừm. Cuộc đột kích này được giám sát bởi Hiệp hôi, chắc là nó tương đối an toàn nhỉ?”
                Với một chút lo lắng, Park đảo mắt nhìn xung quanh. Một Cổng bị lờ đi một Công hội nghĩa là nó có thu nhập thấp, và thu nhập thấp nghĩa là độ khó thấp. Tất nhiên, ở đời chẳng có gì chắc 100% . Giống như Park, các thợ săn khác đảo mắt xung quanh với vẻ căng thẳng.
                “Có lẽ vậy …”
                Uống nốt cốc cà phê, Kim vẫy tay chào một người vừa xuất hiện phía xa.
                “Ồ, chờ đã. Xem ai kìa! Cậu Sung. Sung ơi!”
                Các Thợ Săn khác cũng nhìn người vừa đến với vẻ quen thuộc và thư thái.
                “Xin chào.”
                Đó là Sung Jinwoo.
                Đáp lại Kim với một cái gật đầu, Jinwoo tiếp tục bước đi. Khi anh ta đi qua, Kim cười khẩy và bớt lo âu.
                “Jinwoo đã đến. Vậy nơi này chắc là an toàn.”
                Park tròn mắt hòi Kim.
                “Sao? Tay Sung Jinwoo ấy mạnh thế cơ à?”
                “À, anh Park không biết Jinwoo nhỉ. Anh ta vào nghề sau khi anh nghỉ. Ở đây chẳng ai không biết đến danh tiếng Sung Jinwoo”
                “Mạnh thế ư? Vậy sao anh ta lại làm việc cho Hiệp hội? Sao không làm tự do hoặc tham gia một Công hội lớn?
                Kim vừa cười vừa nheo mắt.
                “Anh biết biệt danh của cậu ta là gì không?”
                “Ai mà biết được? Thôi nào, nói đại đi.”
                “Thợ Săn yếu nhất”
                “… Yếu nhất? Không phải mạnh nhất sao?”
                “Hâm à. Danh hiệu mạnh nhất chỉ dành cho những Thợ Săn hạng S thôi. Còn tên kia là Kẻ Yếu Nhất. Có lẻ là thợ săn yếu nhất cả Hàn Quốc.”
                “Ể?”
                Park cau mày. Nếu anh ta yếu thế, sao mọi người đều tỏ ra nhẹ nhỏm khi anh ta xuất hiện? Một Thợ Săn được chờ đợi, phải là người đáng tin cậy trong một cuộc đột kích chứ. Park không hiểu nổi biểu cảm của những Thợ Săn kia.
                Thấy Park lắc đầu ngạc nhiên, Kim khoác vai anh ta và cười.
                “Anh không hiểu sao? Nếu như Sung Jinwoo xuất hiện ở cuộc đột kích hôm nay, tức là nó rất dễ. Hiệp hội sẽ không mạo hiểm để anh ta tham gia mấy vụ khó nhằn. Chả ai muốn thấy người khác chết một cách vô nghĩa.”
                Nghe vậy, khuôn mặt Park trở nên tươi tỉnh.
                “Ồ, vậy sao?
                Quay với các cuộc đột kích sau một thời gian dài nghỉ việc, cả Park và vợ đều thấy khó khăn và lo lắng. Nhưng khi nghe những gì Kim nói, tâm trạng anh ta trở nên thoải mái hơn.
                Kim tiếp tục.
                “Có lần, anh ta bị thương trong một Cổng hạng E và phải nhập viện cả tuần liền.”
                “Một Thợ Săn bị thương ở Cổng hạng E?
                “Thế đó. Chả ai ngờ rằng có người thật sự bị thương ở Cổng hạng E. Nghe nói họ còn chẳng mang theo Thợ Săn lớp Trị Liệu”
                Thấy Park cười lớn, Kim đưa mắt liếc nhìn Jinwoo.
                “Nào nào, đừng to thế chứ. Cậu ta có thể nghe thấy đấy”
                “Ờ há, quên mất nhỉ!”
                Park nhìn sang Jinwoo và ngừng cười. May sao Jinwoo đứng khá xa và có lẻ chả nghe được cuộc nói chuyện của họ.
                Nhưng thực ra thì….
                “Tôi nghe thấy hết đấy, mấy lão già”
                Cố làm lơ những tiếng cười, anh ta bắt gặp cái liếc nhìn và nụ cười ngạo mạn của họ. Những lúc như này, Jinwoo nguyền rủa thính giác nhạy bén của mình.
                “Mình đến sớm quá ư?”
                Còn chút thời gian trước khi đột kích. Trong khi chờ đợi, Jinwoo đến chỗ nhân viên của Hiệp hội để uống tí cà phê.
                “Cho tôi một ly nhé?”
                “À, Thợ Săn Sung Jinwoo… Tôi xin lỗi, nhưng hết rồi ạ…”
                “…”
                Gió đông lạnh lẽo phả vào mặt Jinwoo. Anh ta đưa ngón tay chùi mũi.
                Một ngày tệ hại, đến cả cà phê cũng hết ngay trước mũi anh ta.
                —
                “Sao anh cứng đầu về chuyện làm Thợ Săn thế, Jinwoo?”
                “Xin lỗi”
                Jinwoo cúi đầu.
                Lee Juhee vừa trị thương cho anh ta, vừa tỏ vẻ khó chịu.
                “Tôi không cần mấy lời xin lỗi đó. Tôi chỉ cảm thấy lo cho anh thôi, biết không? Tôi thề, cứ thế này có ngày anh bị thương nặng thật đó.”
                Bước qua cánh cổng, bạn sẽ ở bên trong Hầm ngục. Hầm ngục lần này có lẽ tầm hạng D.
                Nhìn qua vai Junhee, Jinwoo quan sát những đồng nghiệp của mình. Khoảng mười Thợ săn đang tiêu diệt lũ quái vật xung quanh. Trông họ không mấy chật vật. Vậy mà anh ta lại bị thương.
                Nhiệm vụ của Thợ Săn lớp Trị Liệu là đứng ngoài vòng chiến và chữa trị cho các Thợ Săn bị thương. Là người thường xuyên gặp nạn trong các cuộc đột kích, nên Jinwoo khá nổi tiếng giữa các Trị Liệu Sư.
                Juhee cẩn thận hỏi.
                “Phải chăng có lý do gì khiến anh không thể bỏ nghề?”
                Jinwoo lắc đầu. Anh ta không phải là loại người tiết lộ chuyện riêng tư.
                “Tôi làm vì sở thích thôi. Không có cái nghề này, có lẽ tôi sẽ chết vì chán mất!”
                Juhee tỏ ra khó chịu.
                “Có ngày anh sẽ được sang kiếp sau để đột kích vì cái sở thích này đấy!”
                Bất ngờ với phản ứng đó, Jinwoo cười.
                “Này, đừng cười. Hở vết thương bây giờ!”
                Jinwoo vừa cười khúc khích vừa hỏi.
                “Này. cô nghe câu đó ở đâu thế?”
                “Còn đâu nữa? Từ anh Kim bên kia kìa.”
                “Hừm, lão già ấy…”
                Trong lúc họ vừa trò truyện vừa cười, việc trị thương đã hoàn thành. Nhưng muộn rồi, cuộc kích gần như đã kết thúc..
                “Hôm nay mình chỉ giết được một ma thú…”
                Thậm chí, nó chỉ là một quái vật hạng E. Anh ta tung cục ma thạch hạng E trong tay. Cục ma thạch từ ma thú hạng E chỉ đáng giá gần 100.000 won. Thật thảm hại khi anh ta đã phải mạo hiểm cả mạng sống của mình, để rồi chỉ nhận lại được chừng đó.
                “Nghe nói ma thạch từ ma thú hạng C đáng giá ít nhất vài chục triệu won”.
                Nhưng đối với Jinwoo, một thợ săn hạng E, chuyện hạ gục một ma thú hạng C là bất khả thi.
                Đột nhiên, ai đó la lên.
                “Ể, ở đây còn có một cánh cổng này!”
                Các thợ săn bu về phía giọng nói phát ra.
                “Đúng rồi”
                “Thật hả? Một cánh cổng nữa?”
                Đúng như người đầu tiên nhận ra, quả thật còn một cánh cổng nữa ở đây.
                “Một Hầm ngục kép… Vậy là nó thật sự tồn tại”
                Ông Song – một Thợ Săn với mười năm kinh nghiệm, nhìn vào cánh cổng mới phát hiện với vẻ băn khoăn. Không thể nhìn sâu vào hang động tăm tối, Song bèn sử dụng kĩ năng phép thuật lửa. Hỏa cầu từ bàn tay ông ta bay qua hang động và xua đi bóng tối. Tuy nhiên, hang động sâu hơn dự đoán. Không lâu sau, hỏa cầu hết năng lượng, rơi xuống đất và vụt tắt. Bóng tối lại bao phủ tầm mắt mọi người.
                “Hmm… Mọi người, làm ơn tập trung lại”
                Là đội trưởng của đội đột kích, Song tập trung mọi người trước mặt ông ta. Juhee và Jinwoo, cũng đã hoàn thành việc trị thương và tập trung cùng mọi người.
                Song nói với mọi người.
                “Như mọi người đã biết, Cổng sẽ không đóng lại trừ khi Trùm Hầm ngục bị hạ. Hiện Cổng này vẫn còn mở, dù chúng ta đã giết hết mọi thứ trong khu vực, có lẽ con Trùm thật đang nằm trong đường hầm đó.”
                Song đưa mắt về phía cánh cổng mới phát hiện. Các thợ săn nhìn nhau và gật đầu đồng tình.
                “Thông thường, thủ tục trong những thình huống như thế này là thoát khỏi Hầm ngục, liên hệ với Hiệp hội và để họ xử lý tiếp. Nhưng nếu ta làm thế, và nhóm thợ săn khác tiêu diệt Trùm, có thể thu nhập từ cuộc đột kích này của chúng ta sẽ giảm đáng kể.”
                Các Thợ Săn tỏ ra khó chịu. Park – người có mặt ở đây để kiếm tiền phụ vợ – trông rất băn khoăn. “Chi phí chăm sóc sản phụ bây giờ rất đắt đỏ” Nếu bây giờ anh ta rời đi, những gì anh ta liều mạng sẽ trở thành công cốc.
                “Vì vậy tôi nghĩ là… Nếu chúng ta tiếp tục và giết con Trùm thì sao? Các anh nghĩ thế nào?”
                Các Thợ Săn trầm tư suy nghĩ.
                “…”
                “…”
                Đây không phải là một quyết định dễ dàng. Vài người hiểu rằng, không có gì đảm bảo là Hầm Ngục kép sẽ an toàn như cái họ vừa quét sạch. Một số thì nghĩ rằng, nếu cái ở ngoài dễ thế này thì cái ở trong chắc cũng không đến nỗi nào. Tất nhiên, đây không phải là một tình huống mà tất cả mọi người sẽ đồng lòng.
                “Hmm…”
                Song hắng giọng.
                “Ở đây hiện có 17 người, hay là ta biểu quyết nhé? Và biểu quyết xong thì không phàn nàn gì cả. Thế nào?”
                Các Thợ Săn đều gật đầu đồng ý.
                Song là người đầu tiên giơ tay. “Tôi sẽ đi”
                Park nối tiếp ngay sau Song, “Tôi đi nữa”
                “Tôi, tôi nữa..”
                “Đây nữa.”
                “Thêm một người nữa”
                Kim cũng tham gia vào nhóm đi. Nhưng cũng có các ý kiến trái chiều.
                “Không”
                “Tôi nghĩ ta nên đợi đánh giá của Hiệp hội”
                Lúc tỷ lệ đi/không đi là 8-7, tất cả quay lại nhìn 2 người chưa ra quyết định.
                “Xin lỗi…”
                Lắc đầu, Juhee chọn không. Vậy là tỷ lệ cân bằng: 8-8.
                Song quay sang hỏi người còn lại.
                “Cậu Sung?”
                Quyết định cuối cùng của cả nhóm dựa vào anh ta. Jinwoo tung cục ma thạch hạng E trong tay, nhìn sang bên cạnh.
                Juhee lắc đầu khi bắt gặp ánh mắt của anh.
                Cô có linh cảm xấu về chuyện này. Ngay cả Jinwoo cũng vậy. Trong mọi hoàn cảnh, anh ta không dám đặt mình vào vòng nguy hiểm. Dù sao thì anh ta cũng không đủ kĩ năng và can đảm để làm thế.
                Nhưng Jinwoo có một đứa em gái chuẩn bị vào đại học.
                “Mình không có khoản tiết kiệm nào cho việc đó “
                Hai mươi bốn tuổi, Jinwoo phải rời đại học vì không trả nổi học phí. Anh không muốn chuyện đó cũng xảy ra với em gái mình.
                Chẳng ai sống mà không cần tiền. Ông Park không phải là người duy nhất.
                Jinwoo giơ tay:
                “Tôi sẽ đi”.
            '],
        ]);
    }
}

class Account extends Seeder{
    public function run()
    {
        DB::table('account')->insert([
            ['username'=>'admin','password'=>'admin','name'=>'admin',
            'avatar'=>'https://i1.wp.com/gocsuckhoe.com/wp-content/uploads/2020/09/avatar-facebook.jpg?w=632&ssl=1']
        ]);
    }
}

// class Comment extends Seeder{
//     public function run()
//     {
//         DB::table('comment')->insert([
//             ['novelID'=>1,'accUsername'=>'admin','content'=>'Truyện hay quá'],
//         ]);
//     }
// }

class FollowList extends Seeder{
    public function run()
    {
        DB::table('follow_list')->insert([
            ['novelID'=>1,'accUsername'=>'admin'],
        ]);
    }
}

// class AnotherTitle extends Seeder{
//     public function run()
//     {
//         DB::table('comment')->insert([
//             ['novelID'=>1,'accUsername'=>'admin','conent'=>'Truyện hay quá'],
//         ]);
//     }
// }
