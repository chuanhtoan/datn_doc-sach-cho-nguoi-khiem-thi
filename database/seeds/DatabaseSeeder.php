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
        $this->call(User::class);
        $this->call(NovelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(Novel_CategorySeeder::class);
        $this->call(Chapter::class);
        $this->call(AnotherTitle::class);
        $this->call(Comment::class);
        $this->call(FollowList::class);
    }
}

class NovelSeeder extends Seeder{
    public function run()
    {
        DB::table('novel')->insert([
            ['title'=>'Để Có Trí Nhớ Tốt','author'=>'Vương Trung Hiếu','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://sachvui.com/cover/2020/de-co-tri-nho-tot.jpg',
            'description'=>'Trí nhớ là cái cốt lõi của sự thành công trong học tập cũng như công việc, người có trí nhớ tốt sẽ thuận tiện hơn rất nhiều trong cuộc sống. Tuy nhiên, không phải ai trong chúng ta cũng biết cách làm thế nào để có một trí nhớ tốt?'],

            ['title'=>'Tạo Lập Mô Hình Kinh Doanh','author'=>'Alexander Osterwalder & Yves Pigneur','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_137778.jpg',
            'description'=>'Tạo Lập Mô Hình Kinh Doanh mang đến cho bạn những kỹ thuật sáng tạo thiết thực đang được các nhà tư vấn kinh doanh và các công ty hàng đầu thế giới sử dụng. Với đối tượng độc giả mục tiêu là những con người hành động, cuốn sách được thiết kế theo hướng trực quan, dễ hiểu, dễ áp dụng. Cuốn sách dành cho những người sẵn sàng vứt bỏ đường lối tư duy cũ để tiếp nhận những mô hình sáng tạo giá trị mới. Do đó, nó phù hợp với các lãnh đạo, cố vấn và các doanh nhân của mọi tổ chức.'],

            ['title'=>'Lời Thú Tội Mới Của Một Sát Thủ Kinh Tế','author'=>'John Perkins','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/l/o/loi_thu_toi_moi_cua_mot_sat_thu_kinh_te_1_2019_02_22_14_51_50.jpg',
            'description'=>'Kể từ sau khi quyết định rút ra khỏi vai trò sát thủ kinh tế, John Perkins luôn tích cực tên tiếng và thực hiện các hoạt động cụ thể để bảo vệ môi trường cũng như phản đối sự can thiệp bất lương của các tập đoàn và Chính phủ của các nước lớn vào những quốc gia khác. Ông vận động cho những tộc người bản địa trên khắp địa cầu, tổ chức các đoàn thăm quan đến vùng núi và rừng rậm ở châu Mỹ Latinh để công chúng thấy rõ hơn về những thực tế đau lòng mà con người và những vùng này đang phải đối mặt.'],

            ['title'=>'Những Người Khổng Lồ Trong Giới Kinh Doanh','author'=>'Richard S. Tedlow','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/n/h/nhungnguoikhonglotronggioikinhdoanh.jpg',
            'description'=>'Đây là cuốn sách viết về những người Mỹ làm tốt nhất việc thành lập và phát triển những doanh nghiệp mới. Nó nói về những con người đã phá vỡ những nguyên tắc cũ và tạo ra những nguyên tắc mới, xây dựng nên những thế giới mới, quyết tâm lãnh đạo chứ không chịu bị lãnh đạo, khám phá những công cụ và công nghệ mới khi thời đại của họ mới chỉ mơ hồ ý thức được về chúng để phục vụ cho những thị trường, mà ở chừng mực nào đó, đã được chính họ tạo ra.'],

            ['title'=>'Nếu Tôi Biết Được Khi Còn 20','author'=>'Tina Seelig','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/8/9/8934974137351.jpg',
            'description'=>'Bạn có 5 đô la và 2 giờ đồng hồ để kinh doanh. Bạn sẽ làm gì? - Đây là một trong những ví dụ minh hoạ được nhắc đến trong cuốn sách Nếu Tôi Biết Được Khi Còn 20. Trả lời cho câu hỏi này có rất nhiều cách và với mỗi cách, tác giả lại chỉ ra những bài học nhỏ thôi nhưng hữu ích.'],

            ['title'=>'Những kẻ xuất chúng','author'=>'Malcolm Gladwell','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_184254.jpg',
            'description'=>'Cuốn sách Những kẻ xuất chúng sẽ giúp bạn tìm ra câu trả lời thông qua các phân tích về xã hội, văn hóa và thế hệ của những nhân vật kiệt xuất như Bill Gates, Beatles và Mozart, bên cạnh những thất bại đáng kinh ngạc của một số người khác (ví dụ: Christopher Langan, người có chỉ số IQ cao hơn Einstein nhưng rốt cuộc lại quay về làm việc trong một trại ngựa). Theo đó, cùng với tài năng và tham vọng, những người thành công đều được thừa hưởng một cơ hội đặt biệt để rèn luyện kỹ năng và cho phép họ vượt lên những người cùng trang lứa.'],

            ['title'=>'36 Kế Trong Kinh Doanh Hiện Đại','author'=>'Lan Bercu, Nguyễn Minh Phương','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_116485.jpg',
            'description'=>'36 Kế Trong Kinh Doanh Hiện Đại sắp xếp thông tin từ nhiều nguồn phong phú vào một cấu trúc thực tiễn và cô đọng chúng thành những bài học cụ thể có thể sử dụng được ngay. Mỗi chiến lược bao gồm một điển tích Trung Hoa ngắn gọn, những tình huống kinh doanh phù hợp và những công cụ để áp dụng rất cụ thể. Phần trình bày mỗi kế kết thúc với những câu hỏi suy ngẫm để bạn có thể triễn khai những ý tưởng này một cách hợp lý nhất trong tình huống kinh doanh của riêng bạn. Trí tuệ vượt thời gian trong cuốn sách này sẽ giúp bạn giải phóng tư duy sáng tạo và vượt trội trong cạnh tranh.'],

            ['title'=>'Nghĩ Giàu & Làm Giàu','author'=>'Napoleon Hill','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/n/g/nghigiaulamgiau_110k-01_bia-1.jpg',
            'description'=>'Think and Grow Rich - Nghĩ giàu và làm giàu là một trong những cuốn sách bán chạy nhất mọi thời đại. Đã hơn 60 triệu bản được phát hành với gần trăm ngôn ngữ trên toàn thế giới và được công nhận là cuốn sách tạo ra nhiều triệu phú, một cuốn sách truyền cảm hứng thành công nhiều hơn bất cứ cuốn sách kinh doanh nào trong lịch sử.'],

            ['title'=>'Nguyên Tắc Vàng Của Napoleon Hill','author'=>'Napoleon Hill','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/n/g/nguyen_tac_vang_cua_napoleon_hill_1_2018_08_04_09_16_44.jpg',
            'description'=>'Những “Think and Grow Rich” (Nghĩ giàu làm giàu), “The Law of Success” (Quy luật của thành công), “Outwitting the Devil” (Chiến thắng con quỷ trong bạn)… được viết bởi Napoleon Hill đều là các tác phẩm kinh điển, đóng vai trò như kim chỉ nam cho các lãnh đạo và doanh nhân trên thế giới trong suốt hàng chục năm qua. Ông là một trong những tác giả nổi tiếng nhất hành tinh, được mệnh danh là người tiên phong cho “khoa học của sự thành công”.'],

            ['title'=>'Dốc Hết Trái Tim','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/2/e/2e7c4c99c9faceda9e926727bb5cc92a_1.jpg',
            'description'=>'Dốc hết trái tim là một quyển sách hay dành cho doanh nhân và mọi giám đốc hay lãnh đạo công ty. Tác giả đồng thời là người sáng lập của thương hiệu Starbucks, chia sẻ câu chuyện đầy cảm hứng về cuộc đời của ông từ khi còn đi học đến khi trở thành CEO của một thương hiệu nổi tiếng trên toàn thế giới. Độc giả sẽ tìm thấy nơi đây bài học về quản trị rất tuyệt vời, mà giá trị của nó vẫn còn vững vàng trong hiện tại. Những kinh nghiệm của tác giả về xây dựng một công ty có trách nhiệm xã hội đối với nhân viên, với cộng đồng và đối với môi trường sẽ cuốn hút lan truyền cảm hứng đến độc giả để họ áp dụng nó vào cuộc sống và công việc kinh doanh của mình.'],
        ]);
    }
}

class CategorySeeder extends Seeder{
    public function run()
    {
        DB::table('category')->insert([
            ['name'=>'Kỹ Năng Sống',            'description'=>'Thể loại có nội dung '],
            ['name'=>'Sức Khỏe',                'description'=>'Thể loại có nội dung '],
            ['name'=>'Nghệ Thuật',              'description'=>'Thể loại có nội dung '],
            ['name'=>'Phong Thủy',              'description'=>'Thể loại có nội dung '],
            ['name'=>'Truyện Ngắn',             'description'=>'Thể loại có nội dung '],

            ['name'=>'Truyện Ma',               'description'=>'Thể loại có nội dung '],
            ['name'=>'Phiêu Lưu',               'description'=>'Thể loại có nội dung '],
            ['name'=>'Triết Học',               'description'=>'Thể loại có nội dung '],
            ['name'=>'Kiến Trúc',               'description'=>'Thể loại có nội dung '],
            ['name'=>'Tài Liệu Học Tập',        'description'=>'Thể loại có nội dung '],

            ['name'=>'Truyện Tranh',            'description'=>'Thể loại có nội dung '],
            ['name'=>'Kinh Tế',                 'description'=>'Thể loại có nội dung '],
            ['name'=>'Học Ngoại Ngữ',           'description'=>'Thể loại có nội dung '],
            ['name'=>'Trinh Thám',              'description'=>'Thể loại có nội dung '],
            ['name'=>'Lịch Sử',                 'description'=>'Thể loại có nội dung '],

            ['name'=>'Truyện Cười',             'description'=>'Thể loại có nội dung '],
            ['name'=>'Huyền Bí',                'description'=>'Thể loại có nội dung '],
            ['name'=>'Tuổi Học Trò',            'description'=>'Thể loại có nội dung '],
            ['name'=>'Kiếm Hiệp',               'description'=>'Thể loại có nội dung '],
            ['name'=>'Nông Nghiệp',             'description'=>'Thể loại có nội dung '],

            ['name'=>'Ẩm Thực',                 'description'=>'Thể loại có nội dung '],
            ['name'=>'Bán Hàng',                'description'=>'Thể loại có nội dung '],
            ['name'=>'Khoa Học',                'description'=>'Thể loại có nội dung '],
            ['name'=>'Văn Hóa',                 'description'=>'Thể loại có nội dung '],
            ['name'=>'Văn Học Việt Nam',        'description'=>'Thể loại có nội dung '],

            ['name'=>'Tiểu Thuyết Phương Tây',  'description'=>'Thể loại có nội dung '],
            ['name'=>'Hồi Ký',                  'description'=>'Thể loại có nội dung '],
            ['name'=>'Cổ Tích',                 'description'=>'Thể loại có nội dung '],
            ['name'=>'Tiểu Thuyết Trung Quốc',  'description'=>'Thể loại có nội dung '],
            ['name'=>'Công Nghệ Thông Tin',     'description'=>'Thể loại có nội dung '],

            ['name'=>'Thư Viện Pháp Luật',      'description'=>'Thể loại có nội dung '],
        ]);
    }
}

class Novel_CategorySeeder extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
            DB::table('novel_category')->insert([
                ['novelID'=>$i,'categoryID'=>rand(1,10)],
                ['novelID'=>$i,'categoryID'=>rand(11,20)],
                ['novelID'=>$i,'categoryID'=>rand(21,31)],
            ]);
        }
    }
}

class Chapter extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
            DB::table('chapter')->insert([
                ['novelID'=>$i, 'number'=>0, 'title'=>'Đôi Điều Về Trí Nhớ',
                'content'=>'
                TRÍ NHỚ LÀ GÌ?
                Trí nhớ là khả năng ghi nhận, tồn trữ và hồi tưởng được các thông tin của não người. Nói cách khác, nó giữ lại được mọi kinh nghiệm thông qua quá trình hoạt động của trí não.Thông thường, hoạt động của trí nhớ gồm có ba giai đoạn:
                Tiếp nhận và ghi lại những gì đã tri giác được từ tai, mắt, mũi.
                Lưu trữ những thông tin đã tiếp nhận.
                Nhớ lại những thông tin đã lưu trữ.Con người có nhiều dạng trí nhớ, trong đó có ba dạng phổ biến nhất: trí nhớ thị giác, trí nhớ thính giác và trí nhớ vận động.
                Người nào có trí nhớ thị giác thì thường nhớ rất lâu những gì đã được nhìn thấy.
                Người có trí nhớ thính giác lại nhớ rất tốt những gì đã nghe được.
                Còn người có trí nhớ vận động thì cần phải viết hay đọc đi đọc lại nhiều lần điều gì đấy mới nhớ dai được.

                RỐI LOẠN TRÍ NHỚ.
                Theo Thạc sĩ y khoa Cao Phi Phong, rối loạn trí nhớ gồm có những dạng sau:
                Sự giảm nhớ: dù những việc xảy ra đã lâu hay mới đây, người bị dạng này bị giảm khả năng nhớ lại một cách đáng kể.
                Quên: bao gồm quên tốt cả các sự việc diễn ra trong quá khứ hay quên từng phần quá khứ, quên một số việc đã diễn ra dù mới hay cũ. Người bị rối loạn trí nhớ có thể bị quên thuận chiều, nghĩa là quên những việc vừa xảy ra trong quá khứ gần, vài giờ hoặc vài tuần sau khi bệnh hay bịquên ngược chiều, còn gọi là quên xa, quên những việc xảy ra vài tháng trước khi bệnh. Ngoài ra, rối loạn trí nhớ có thể dẫn tới việc:
                Quên trong cơn: “quên sự việc xảy ra trong con như cơn vắng ý thức”.
                Quên do ghi nhận kém và nhớ lại kém: việc ghi nhận kém dẫn tói cái gọi là quên gần, tức không nhớ những sự việc vừa xảy ra; còn việc nhở lại kémdưa tới sự quèn xa, tức là quên những việc đã xảy ra từ rất lâu.
                Quên tiến triển: sự việc xảy ra gần dây thì quên trước, còn sự việc diễn ra từ lâu thì quên sau. Cối quên này tăng đần theo thời gian của người bệnh.
                Loạn nhớ: nhớ nhầm thời gian diễn ra sự việc trong quá khứ hay nhớ nhầm những việc xảy ra của người khác là của mình.
                Tăng nhớ: nhớ lại những sự việc diễn ra từ rất lâu, không có ý nghĩa gì trong hiện tại hay chỉ nhớ những chi tiết vụn vặn, không ăn khớp với nhau.
                '],

                ['novelID'=>$i, 'number'=>1, 'title'=>'Cách Phát Triển Bộ Nhớ',
                'content'=>'
                Nếu không xác định được kế hoạch hay hệ thống hóa tốt một phương thức thủ tục, những điều sẽ được chấp nhận và thực thi,thì không có chính phủ, doanh nghiệp hay cơ quan nào có thể hoạt động và quản lý một cách thành công.
                Để phát triển bộ nhớ bạn phải chấp nhận một hệ thống rồi theo đuổi nó, nghĩa là bạn cần thực hành một hệ thống ký ức hay một thuật gợi nhớ. Điều này tương tự như một người có thị lực kém sử dụng kính đeo mắt, anh ta sẽ nhìn rõ hơn, và bạn có thể dùng công cụ này để cải thiện khả năng nhớ của bạn.
                Bạn sẽ tìm hiểu về một “bộ nguyên tắc", chẳng bao lâu sau khi hiểu và thông thạo bộ này bạn sẽ sai khiến chúng như những người hầu. Tuy nhiên, bạn sẽ không trở thành chủ củachúng nếu không áp dụng chúng bằng hành động cụ thể! Một khi bạn đã sử dụng chúng rồi thì nghệ thuật ghi nhớ sẽ trở thành người hầu biết vâng lời bạn.

                BA BÍ MẬT CỦA BỘ NHỚ MÁY TƯ DUY
                Đã bao nhiêu lần bạn nghe người khác nói “Điều đó nhắc nhở tôi”? Và bao nhiêu lần bạn đã thấy hoặc nghe điều gì đó gợi ý khiến bạn kêu ồ lên? Khi điều này xảy ra chính là lúc ta được nhắc bằng một quá trình gọi là sự liên tưởng không kiểm soát. Từ cái này ta liên tưởng rồi nhớ đến một cái khác, tuy nhiên trong lúc ấy khả năng nhớ của ta có thể không nhiều. Ta buộc phải chiến đấu, dò dẫm và tìm lại ý nghĩ “đã mất” đó.
                Để phát triển khả năng nhớ lại thông tin trong tương lai, bạn cần sử dụng một hệ thống có thể giúp bạn định vị ký ức và kéo nó ra. Điều này được thực hiện bằng sự liên tưởng kiểm soát.
                Bạn có thể tạo ra sự liên tưởng có kiểm soát bằng cách sắp đặt ngăn nắp kho chứa nằm trong não bạn, sắp dặt bằng những hình ảnh cố định đã được khắc sâu trong tâm trí.
                Những ý nghĩ mà bạn nhớ lại đã được gởi hoặc ấn định ở một số nơi cụ thể bằng một cách nào đó và về sau bạn có thể nối kết lại được với chúng. Thực hiện được điều này, có nghĩa là bạn đã thật sự nhìn chăm chú vào ngân hàng ký ức của bạn, với lấy từ một ngăn nào đó trong kho chứa đã được chỉ định rồi nhớ lại dữ liệu trong tập tin.
                '],
            ]);
        }
    }
}

class User extends Seeder{
    public function run()
    {
        DB::table('users')->insert([
            ['email'=>'admin','password'=>'admin','name'=>'admin','type'=>1,
            'avatar'=>'https://i1.wp.com/gocsuckhoe.com/wp-content/uploads/2020/09/avatar-facebook.jpg?w=632&ssl=1'],
        ]);
        DB::table('users')->insert([
            ['email'=>'hieu','password'=>'admin','name'=>'Hiếu',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2018/07/anh-dai-dien-boy-cam-kiem-samurai-kyo-520x390.jpg'],
            ['email'=>'tieuanh','password'=>'admin','name'=>'Tiểu Ánh',
            'avatar'=>'https://anhdephd.com/wp-content/uploads/2019/10/anh-avatar-ngau-chat-cho-con-gai.jpg'],
            ['email'=>'phungthetai','password'=>'admin','name'=>'Phùng Thế Tài',
            'avatar'=>'https://anhdephd.com/wp-content/uploads/2019/07/hinh-anh-avatar-chibi-cute-de-thuong-dep-nhat-cho-facebook-1-575x560.png'],
            ['email'=>'cuong','password'=>'admin','name'=>'Cường',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/08/avatar-cap-doi-de-thuong-cute.jpg'],
            ['email'=>'minhem','password'=>'admin','name'=>'Minh Em',
            'avatar'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/08/anh-avatar-hai-nguoi.jpg'],
            ['email'=>'minhanh','password'=>'admin','name'=>'Minh Anh',
            'avatar'=>'https://i.pinimg.com/564x/e6/57/55/e65755e73d8085e30aedfa21fde07f1b.jpg'],
        ]);
    }
}

class Comment extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
            DB::table('comment')->insert([
                ['novelID'=>$i,'accUsername'=>7,'content'=>'Mọi người chỉ em cách vào đọc được cả cuốn với. Cảm ơn ạ!'],
                ['novelID'=>$i,'accUsername'=>2,'content'=>'Cuốn sách cho bạn đọc mốc góc nhìn mới về những người thành công trong các lĩnh vực khác nhau.'],
                ['novelID'=>$i,'accUsername'=>3,'content'=>'Lâu quá ad ơi, 252 – 259 vẫn chưa thấy đâu :(('],
                ['novelID'=>$i,'accUsername'=>4,'content'=>'Tác phẩm thật sự đã mang đến cho mình một góc nhìn rất mới mẻ về thành công'],
                ['novelID'=>$i,'accUsername'=>5,'content'=>'Phải nói là quyển sách này đã cho mình một cái nhìn đầy đánh giá'],
                ['novelID'=>$i,'accUsername'=>6,'content'=>'Trời ơi cuốn này siêu hay luôn ý. Lâu lắm rồi tớ mới có cảm giác đọc sách mà gật đầu liên tục như đi quẩy vậy.'],
            ]);
        }
    }
}

class FollowList extends Seeder{
    public function run()
    {
        DB::table('follow_list')->insert([
            ['novelID'=>1,'accUsername'=>1],
            ['novelID'=>3,'accUsername'=>1],
            ['novelID'=>5,'accUsername'=>1],
            ['novelID'=>7,'accUsername'=>1],
            ['novelID'=>9,'accUsername'=>1],
        ]);
    }
}

class AnotherTitle extends Seeder{
    public function run()
    {
        DB::table('another_title')->insert([
            ['novelID'=>1,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>2,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>3,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>4,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>5,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>6,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>7,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>8,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>9,'title'=>'フェイト／ステイナイト'],
            ['novelID'=>10,'title'=>'フェイト／ステイナイト'],
        ]);
    }
}
