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

            ['title'=>'Cuộc Chiến Disney','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/8/9/8936037798967.jpg',
            'description'=>'Trí nhớ là cái cốt lõi của sự thành công trong học tập cũng như công việc, người có trí nhớ tốt sẽ thuận tiện hơn rất nhiều trong cuộc sống. Tuy nhiên, không phải ai trong chúng ta cũng biết cách làm thế nào để có một trí nhớ tốt?'],

            ['title'=>'Từ Tốt Đến Vĩ Đại','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/n/x/nxbtre_full_09462021_024609.jpg',
            'description'=>'Tạo Lập Mô Hình Kinh Doanh mang đến cho bạn những kỹ thuật sáng tạo thiết thực đang được các nhà tư vấn kinh doanh và các công ty hàng đầu thế giới sử dụng. Với đối tượng độc giả mục tiêu là những con người hành động, cuốn sách được thiết kế theo hướng trực quan, dễ hiểu, dễ áp dụng. Cuốn sách dành cho những người sẵn sàng vứt bỏ đường lối tư duy cũ để tiếp nhận những mô hình sáng tạo giá trị mới. Do đó, nó phù hợp với các lãnh đạo, cố vấn và các doanh nhân của mọi tổ chức.'],

            ['title'=>'Payback Time','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_30532_1.jpg',
            'description'=>'Kể từ sau khi quyết định rút ra khỏi vai trò sát thủ kinh tế, John Perkins luôn tích cực tên tiếng và thực hiện các hoạt động cụ thể để bảo vệ môi trường cũng như phản đối sự can thiệp bất lương của các tập đoàn và Chính phủ của các nước lớn vào những quốc gia khác. Ông vận động cho những tộc người bản địa trên khắp địa cầu, tổ chức các đoàn thăm quan đến vùng núi và rừng rậm ở châu Mỹ Latinh để công chúng thấy rõ hơn về những thực tế đau lòng mà con người và những vùng này đang phải đối mặt.'],

            ['title'=>'Thấu Hiểu Tiếp Thị Từ A Đến Z','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/n/x/nxbtre_full_31432020_024333_2_1.jpg',
            'description'=>'Đây là cuốn sách viết về những người Mỹ làm tốt nhất việc thành lập và phát triển những doanh nghiệp mới. Nó nói về những con người đã phá vỡ những nguyên tắc cũ và tạo ra những nguyên tắc mới, xây dựng nên những thế giới mới, quyết tâm lãnh đạo chứ không chịu bị lãnh đạo, khám phá những công cụ và công nghệ mới khi thời đại của họ mới chỉ mơ hồ ý thức được về chúng để phục vụ cho những thị trường, mà ở chừng mực nào đó, đã được chính họ tạo ra.'],

            ['title'=>'Bí Quyết Đầu Tư Và Kinh Doanh Chứng Khoán','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_215963.jpg',
            'description'=>'Bạn có 5 đô la và 2 giờ đồng hồ để kinh doanh. Bạn sẽ làm gì? - Đây là một trong những ví dụ minh hoạ được nhắc đến trong cuốn sách Nếu Tôi Biết Được Khi Còn 20. Trả lời cho câu hỏi này có rất nhiều cách và với mỗi cách, tác giả lại chỉ ra những bài học nhỏ thôi nhưng hữu ích.'],

            ['title'=>'Không Bao Giờ Là Thất Bại! Tất Cả Là Thử Thách','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/u/n/untitled_1_2.jpg',
            'description'=>'Cuốn sách Những kẻ xuất chúng sẽ giúp bạn tìm ra câu trả lời thông qua các phân tích về xã hội, văn hóa và thế hệ của những nhân vật kiệt xuất như Bill Gates, Beatles và Mozart, bên cạnh những thất bại đáng kinh ngạc của một số người khác (ví dụ: Christopher Langan, người có chỉ số IQ cao hơn Einstein nhưng rốt cuộc lại quay về làm việc trong một trại ngựa). Theo đó, cùng với tài năng và tham vọng, những người thành công đều được thừa hưởng một cơ hội đặt biệt để rèn luyện kỹ năng và cho phép họ vượt lên những người cùng trang lứa.'],

            ['title'=>'Sách Lược Đầu Tư Của W. Buffett','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_23432.jpg',
            'description'=>'36 Kế Trong Kinh Doanh Hiện Đại sắp xếp thông tin từ nhiều nguồn phong phú vào một cấu trúc thực tiễn và cô đọng chúng thành những bài học cụ thể có thể sử dụng được ngay. Mỗi chiến lược bao gồm một điển tích Trung Hoa ngắn gọn, những tình huống kinh doanh phù hợp và những công cụ để áp dụng rất cụ thể. Phần trình bày mỗi kế kết thúc với những câu hỏi suy ngẫm để bạn có thể triễn khai những ý tưởng này một cách hợp lý nhất trong tình huống kinh doanh của riêng bạn. Trí tuệ vượt thời gian trong cuốn sách này sẽ giúp bạn giải phóng tư duy sáng tạo và vượt trội trong cạnh tranh.'],

            ['title'=>'Bí Mật Của Phan Thiên Ân','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_30538.jpg',
            'description'=>'Think and Grow Rich - Nghĩ giàu và làm giàu là một trong những cuốn sách bán chạy nhất mọi thời đại. Đã hơn 60 triệu bản được phát hành với gần trăm ngôn ngữ trên toàn thế giới và được công nhận là cuốn sách tạo ra nhiều triệu phú, một cuốn sách truyền cảm hứng thành công nhiều hơn bất cứ cuốn sách kinh doanh nào trong lịch sử.'],

            ['title'=>'Những Bài Học Tuyệt Vời Từ Warren Buffett','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_6588_1.jpg',
            'description'=>'Những “Think and Grow Rich” (Nghĩ giàu làm giàu), “The Law of Success” (Quy luật của thành công), “Outwitting the Devil” (Chiến thắng con quỷ trong bạn)… được viết bởi Napoleon Hill đều là các tác phẩm kinh điển, đóng vai trò như kim chỉ nam cho các lãnh đạo và doanh nhân trên thế giới trong suốt hàng chục năm qua. Ông là một trong những tác giả nổi tiếng nhất hành tinh, được mệnh danh là người tiên phong cho “khoa học của sự thành công”.'],

            ['title'=>'Thói Quen Thành Công Của Những Triệu Phú Tự Thân','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_182444.jpg',
            'description'=>'Dốc hết trái tim là một quyển sách hay dành cho doanh nhân và mọi giám đốc hay lãnh đạo công ty. Tác giả đồng thời là người sáng lập của thương hiệu Starbucks, chia sẻ câu chuyện đầy cảm hứng về cuộc đời của ông từ khi còn đi học đến khi trở thành CEO của một thương hiệu nổi tiếng trên toàn thế giới. Độc giả sẽ tìm thấy nơi đây bài học về quản trị rất tuyệt vời, mà giá trị của nó vẫn còn vững vàng trong hiện tại. Những kinh nghiệm của tác giả về xây dựng một công ty có trách nhiệm xã hội đối với nhân viên, với cộng đồng và đối với môi trường sẽ cuốn hút lan truyền cảm hứng đến độc giả để họ áp dụng nó vào cuộc sống và công việc kinh doanh của mình.'],

            ['title'=>'Đạo Của Warren Buffett','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_369.jpg',
            'description'=>'Đây là cuốn sách viết về những người Mỹ làm tốt nhất việc thành lập và phát triển những doanh nghiệp mới. Nó nói về những con người đã phá vỡ những nguyên tắc cũ và tạo ra những nguyên tắc mới, xây dựng nên những thế giới mới, quyết tâm lãnh đạo chứ không chịu bị lãnh đạo, khám phá những công cụ và công nghệ mới khi thời đại của họ mới chỉ mơ hồ ý thức được về chúng để phục vụ cho những thị trường, mà ở chừng mực nào đó, đã được chính họ tạo ra.'],

            ['title'=>'Sinh Ra Để Trở Thành Steve Jobs','author'=>'Howard Schultz, Dori Jones Yang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/thumbnail/362x/9df78eab33525d08d6e5fb8d27136e95/8/9/8936037799490.jpg',
            'description'=>'Cuốn sách Những kẻ xuất chúng sẽ giúp bạn tìm ra câu trả lời thông qua các phân tích về xã hội, văn hóa và thế hệ của những nhân vật kiệt xuất như Bill Gates, Beatles và Mozart, bên cạnh những thất bại đáng kinh ngạc của một số người khác (ví dụ: Christopher Langan, người có chỉ số IQ cao hơn Einstein nhưng rốt cuộc lại quay về làm việc trong một trại ngựa). Theo đó, cùng với tài năng và tham vọng, những người thành công đều được thừa hưởng một cơ hội đặt biệt để rèn luyện kỹ năng và cho phép họ vượt lên những người cùng trang lứa.'],

            ['title'=>'Phục Hồi Chức Năng Cho Người Khuyết Tật/Giảm Chức Năng Nhìn','author'=>'NXB Y Học','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://image.slidesharecdn.com/11phuchoichucnangchotregapkhokhanvenhin-140109224251-phpapp01/95/phc-hi-chc-nng-cho-ngi-khuyt-ttgim-chc-nng-nhn-1-638.jpg?cb=1389308456',
            'description'=>'Sách phục hồi chức năng cho người khuyết tật/giảm chức năng nhìn.'],

            ['title'=>'Trông Đẹp Là Lợi Thế Sống Đẹp Là Bản Lĩnh','author'=>'Louis Braille','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://thuvienhanoi.org.vn/Upload/2021/04/20/z2445112993353_ba9878f589a5f4324e3c9098f3f9da1d_2021Apr20_033748088.jpg',
            'description'=>'Trông Đẹp Là Lợi Thế Sống Đẹp Là Bản Lĩnh.'],

            ['title'=>'Đời Ngắn, Đừng Khóc, Hãy Tô Son','author'=>'Louis Braille','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://thuvienhanoi.org.vn/Upload/2021/03/29/164322162_243695910818011_4578244187820609936_n_2021Mar29_022634054.jpg',
            'description'=>'Đời Ngắn, Đừng Khóc, Hãy Tô Son.'],

            ['title'=>'Câu Chuyện Về Cuộc Đời Của Louis Braille','author'=>'Louis Braille','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'http://img.idesign.vn/919x-/2018/08/26/id_sixdots_01.jpg',
            'description'=>'Quyển sách về cuộc đời vượt khó của nhà phát minh chữ nổi cho người khiếm thị.'],

            ['title'=>'Phương Pháp Dạy Chữ Nổi Cho Thanh Thiếu Niên Và Người Trưởng Thành','author'=>'Louis Braille','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://thuvienhanoi.org.vn/Upload/2020/12/25/132041674_428123078212637_9105829377725687347_n_2020Dec25_023359698.jpg',
            'description'=>'Phương Pháp Dạy Chữ Nổi Cho Thanh Thiếu Niên Và Người Trưởng Thành.'],

        ]);
    }
}

class CategorySeeder extends Seeder{
    public function run()
    {
        DB::table('category')->insert([
            ['name'=>'Kỹ Năng Sống',            'description'=>'Thể loại có nội dung về Kỹ Năng Sống'],
            ['name'=>'Sức Khỏe',                'description'=>'Thể loại có nội dung về Sức Khỏe'],
            ['name'=>'Nghệ Thuật',              'description'=>'Thể loại có nội dung về Nghệ Thuật'],
            ['name'=>'Phong Thủy',              'description'=>'Thể loại có nội dung về Phong Thủy'],
            ['name'=>'Truyện Ngắn',             'description'=>'Thể loại có nội dung về Truyện Ngắn'],

            ['name'=>'Truyện Ma',               'description'=>'Thể loại có nội dung về Truyện Ma'],
            ['name'=>'Phiêu Lưu',               'description'=>'Thể loại có nội dung về Phiêu Lưu'],
            ['name'=>'Triết Học',               'description'=>'Thể loại có nội dung về Triết Học'],
            ['name'=>'Kiến Trúc',               'description'=>'Thể loại có nội dung về Kiến Trúc'],
            ['name'=>'Tài Liệu Học Tập',        'description'=>'Thể loại có nội dung về Tài Liệu Học Tập'],

            ['name'=>'Truyện Tranh',            'description'=>'Thể loại có nội dung về Truyện Tranh'],
            ['name'=>'Kinh Tế',                 'description'=>'Thể loại có nội dung về Kinh Tế'],
            ['name'=>'Học Ngoại Ngữ',           'description'=>'Thể loại có nội dung về Học Ngoại Ngữ'],
            ['name'=>'Trinh Thám',              'description'=>'Thể loại có nội dung về Trinh Thám'],
            ['name'=>'Lịch Sử',                 'description'=>'Thể loại có nội dung về Lịch Sử'],

            ['name'=>'Truyện Cười',             'description'=>'Thể loại có nội dung về Truyện Cười'],
            ['name'=>'Huyền Bí',                'description'=>'Thể loại có nội dung về Huyền Bí'],
            ['name'=>'Tuổi Học Trò',            'description'=>'Thể loại có nội dung về Tuổi Học Trò'],
            ['name'=>'Kiếm Hiệp',               'description'=>'Thể loại có nội dung về Kiếm Hiệp'],
            ['name'=>'Nông Nghiệp',             'description'=>'Thể loại có nội dung về Nông Nghiệp'],

            ['name'=>'Ẩm Thực',                 'description'=>'Thể loại có nội dung về Ẩm Thực'],
            ['name'=>'Bán Hàng',                'description'=>'Thể loại có nội dung về Bán Hàng'],
            ['name'=>'Khoa Học',                'description'=>'Thể loại có nội dung về Khoa Học'],
            ['name'=>'Văn Hóa',                 'description'=>'Thể loại có nội dung về Văn Hóa'],
            ['name'=>'Văn Học Việt Nam',        'description'=>'Thể loại có nội dung về Văn Học Việt Nam'],

            ['name'=>'Tiểu Thuyết Phương Tây',  'description'=>'Thể loại có nội dung về Tiểu Thuyết Phương Tây'],
            ['name'=>'Hồi Ký',                  'description'=>'Thể loại có nội dung về Hồi Ký'],
            ['name'=>'Cổ Tích',                 'description'=>'Thể loại có nội dung về Cổ Tích'],
            ['name'=>'Tiểu Thuyết Trung Quốc',  'description'=>'Thể loại có nội dung về Tiểu Thuyết Trung Quốc'],
            ['name'=>'Công Nghệ Thông Tin',     'description'=>'Thể loại có nội dung về Công Nghệ Thông Tin'],

            ['name'=>'Thư Viện Pháp Luật',      'description'=>'Thể loại có nội dung về Thư Viện Pháp Luật'],
        ]);
    }
}

class Novel_CategorySeeder extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 27; $i++) {
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
        for ($i=1; $i <= 22; $i++) {
            DB::table('chapter')->insert([
                ['novelID'=>$i, 'number'=>0, 'title'=>'Đôi Điều Về Trí Nhớ',
                'content'=>'
                <p>Nếu không xác định được kế hoạch hay hệ thống hóa tốt một phương thức thủ tục, những điều sẽ được chấp nhận và thực thi, thì không có chính phủ, doanh nghiệp hay cơ quan nào có thể hoạt động và quản lý một cách thành công.</p><p>Để phát triển bộ nhớ bạn phải chấp nhận một hệ thống rồi theo đuổi nó, nghĩa là bạn cần thực hành một hệ thống ký ức hay một thuật gợi nhớ. Điều này tương tự như một người có thị lực kém sử dụng kính đeo mắt, anh ta sẽ nhìn rõ hơn, và bạn có thể dùng công cụ này để cải thiện khả năng nhớ của bạn.</p><p>Bạn sẽ tìm hiểu về một “bộ nguyên tắc", chẳng bao lâu sau khi hiểu và thông thạo bộ này bạn sẽ sai khiến chúng như những người hầu. Tuy nhiên, bạn sẽ không trở thành chủ của chúng nếu không áp dụng chúng bằng hành động cụ thể! Một khi bạn đã sử dụng chúng rồi thì nghệ thuật ghi nhớ sẽ trở thành người hầu biết vâng lời bạn.</p><p><strong>BA BÍ MẬT CỦA BỘ NHỚ MÁY TƯ DUY</strong></p><p>Đã bao nhiêu lần bạn nghe người khác nói “Điều đó nhắc nhở tôi”? Và bao nhiêu lần bạn đã thấy hoặc nghe điều gì đó gợi ý khiến bạn kêu ồ lên? Khi điều này xảy ra chính là lúc ta được nhắc bằng một quá trình gọi là sự liên tưởng không kiểm soát. Từ cái này ta liên tưởng rồi nhớ đến một cái khác, tuy nhiên trong lúc ấy khả năng nhớ của ta có thể không nhiều. Ta buộc phải chiến đấu, dò dẫm và tìm lại ý nghĩ “đã mất” đó.</p><p>Để phát triển khả năng nhớ lại thông tin trong tương lai, bạn cần sử dụng một hệ thống có thể giúp bạn định vị ký ức và kéo nó ra. Điều này được thực hiện bằng sự liên tưởng kiểm soát.</p><p>Bạn có thể tạo ra sự liên tưởng có kiểm soát bằng cách sắp đặt ngăn nắp kho chứa nằm trong não bạn, sắp dặt bằng những hình ảnh cố định đã được khắc sâu trong tâm trí.</p><p>Những ý nghĩ mà bạn nhớ lại đã được gởi hoặc ấn định ở một số nơi cụ thể bằng một cách nào đó và về sau bạn có thể nối kết lại được với chúng. Thực hiện được điều này, có nghĩa là bạn đã thật sự nhìn chăm chú vào ngân hàng ký ức của bạn, với lấy từ một ngăn nào đó trong kho chứa đã được chỉ định rồi nhớ lại dữ liệu trong tập tin.</p>
                '],

                ['novelID'=>$i, 'number'=>1, 'title'=>'Cách Phát Triển Bộ Nhớ',
                'content'=>'
                <p><strong>TRÍ NHỚ LÀ GÌ?</strong></p><p>Trí nhớ là khả năng ghi nhận, tồn trữ và hồi tưởng được các thông tin của não người. Nói cách khác, nó giữ lại được mọi kinh nghiệm thông qua quá trình hoạt động của trí não.Thông thường, hoạt động của trí nhớ gồm có ba giai đoạn:</p><p>Tiếp nhận và ghi lại những gì đã tri giác được từ tai, mắt, mũi.</p><p>Lưu trữ những thông tin đã tiếp nhận.</p><p>Nhớ lại những thông tin đã lưu trữ.Con người có nhiều dạng trí nhớ, trong đó có ba dạng phổ biến nhất: trí nhớ thị giác, trí nhớ thính giác và trí nhớ vận động.</p><p>Người nào có trí nhớ thị giác thì thường nhớ rất lâu những gì đã được nhìn thấy.</p><p>Người có trí nhớ thính giác lại nhớ rất tốt những gì đã nghe được.</p><p>Còn người có trí nhớ vận động thì cần phải viết hay đọc đi đọc lại nhiều lần điều gì đấy mới nhớ dai được.</p><p><strong>RỐI LOẠN TRÍ NHỚ.</strong></p><p>Theo Thạc sĩ y khoa Cao Phi Phong, rối loạn trí nhớ gồm có những dạng sau:</p><p>Sự giảm nhớ: dù những việc xảy ra đã lâu hay mới đây, người bị dạng này bị giảm khả năng nhớ lại một cách đáng kể.</p><p>Quên: bao gồm quên tốt cả các sự việc diễn ra trong quá khứ hay quên từng phần quá khứ, quên một số việc đã diễn ra dù mới hay cũ. Người bị rối loạn trí nhớ có thể bị quên thuận chiều, nghĩa là quên những việc vừa xảy ra trong quá khứ gần, vài giờ hoặc vài tuần sau khi bệnh hay bị quên ngược chiều, còn gọi là quên xa, quên những việc xảy ra vài tháng trước khi bệnh. Ngoài ra, rối loạn trí nhớ có thể dẫn tới việc:</p><p>Quên trong cơn: “quên sự việc xảy ra trong con như cơn vắng ý thức”.</p><p>Quên do ghi nhận kém và nhớ lại kém: việc ghi nhận kém dẫn tói cái gọi là quên gần, tức không nhớ những sự việc vừa xảy ra; còn việc nhở lại kém dưa tới sự quèn xa, tức là quên những việc đã xảy ra từ rất lâu.</p><p>Quên tiến triển: sự việc xảy ra gần dây thì quên trước, còn sự việc diễn ra từ lâu thì quên sau. Cối quên này tăng đần theo thời gian của người bệnh.</p><p>Loạn nhớ: nhớ nhầm thời gian diễn ra sự việc trong quá khứ hay nhớ nhầm những việc xảy ra của người khác là của mình.</p><p>Tăng nhớ: nhớ lại những sự việc diễn ra từ rất lâu, không có ý nghĩa gì trong hiện tại hay chỉ nhớ những chi tiết vụn vặn, không ăn khớp với nhau.</p>
                '],
            ]);
        }

        for ($i=23; $i <= 27; $i++) {
            DB::table('chapter')->insert([
                ['novelID'=>$i, 'number'=>0, 'title'=>'Giới Thiệu Chung',
                'content'=>'
                <p>Nếu không xác định được kế hoạch hay hệ thống hóa tốt một phương thức thủ tục, những điều sẽ được chấp nhận và thực thi, thì không có chính phủ, doanh nghiệp hay cơ quan nào có thể hoạt động và quản lý một cách thành công.</p><p>Để phát triển bộ nhớ bạn phải chấp nhận một hệ thống rồi theo đuổi nó, nghĩa là bạn cần thực hành một hệ thống ký ức hay một thuật gợi nhớ. Điều này tương tự như một người có thị lực kém sử dụng kính đeo mắt, anh ta sẽ nhìn rõ hơn, và bạn có thể dùng công cụ này để cải thiện khả năng nhớ của bạn.</p><p>Bạn sẽ tìm hiểu về một “bộ nguyên tắc", chẳng bao lâu sau khi hiểu và thông thạo bộ này bạn sẽ sai khiến chúng như những người hầu. Tuy nhiên, bạn sẽ không trở thành chủ của chúng nếu không áp dụng chúng bằng hành động cụ thể! Một khi bạn đã sử dụng chúng rồi thì nghệ thuật ghi nhớ sẽ trở thành người hầu biết vâng lời bạn.</p><p><strong>BA BÍ MẬT CỦA BỘ NHỚ MÁY TƯ DUY</strong></p><p>Đã bao nhiêu lần bạn nghe người khác nói “Điều đó nhắc nhở tôi”? Và bao nhiêu lần bạn đã thấy hoặc nghe điều gì đó gợi ý khiến bạn kêu ồ lên? Khi điều này xảy ra chính là lúc ta được nhắc bằng một quá trình gọi là sự liên tưởng không kiểm soát. Từ cái này ta liên tưởng rồi nhớ đến một cái khác, tuy nhiên trong lúc ấy khả năng nhớ của ta có thể không nhiều. Ta buộc phải chiến đấu, dò dẫm và tìm lại ý nghĩ “đã mất” đó.</p><p>Để phát triển khả năng nhớ lại thông tin trong tương lai, bạn cần sử dụng một hệ thống có thể giúp bạn định vị ký ức và kéo nó ra. Điều này được thực hiện bằng sự liên tưởng kiểm soát.</p><p>Bạn có thể tạo ra sự liên tưởng có kiểm soát bằng cách sắp đặt ngăn nắp kho chứa nằm trong não bạn, sắp dặt bằng những hình ảnh cố định đã được khắc sâu trong tâm trí.</p><p>Những ý nghĩ mà bạn nhớ lại đã được gởi hoặc ấn định ở một số nơi cụ thể bằng một cách nào đó và về sau bạn có thể nối kết lại được với chúng. Thực hiện được điều này, có nghĩa là bạn đã thật sự nhìn chăm chú vào ngân hàng ký ức của bạn, với lấy từ một ngăn nào đó trong kho chứa đã được chỉ định rồi nhớ lại dữ liệu trong tập tin.</p>
                '],

                ['novelID'=>$i, 'number'=>1, 'title'=>'Những Vấn Đề Mà Người Khuyết Tật Và Gia Đình Gặp Phải',
                'content'=>'
                <p><strong>Đối với cả trẻ em và người lớn, các vấn đề thường gặp phải:&nbsp;</strong></p><p>Hạn chế di chuyển và định hướng được không gian, vị trí của mình đang ở đâu nếu đến nơi khác với nhà của mình.&nbsp;</p><p>Khó khăn trong việc thực hiện các chức năng sinh hoạt hàng ngày như tắm rửa, vệ sinh cá nhân, ăn uống và các công việc khác.&nbsp;</p><p>Khó khăn trong việc hoà nhập xã hội. 4 Phục hồi chức năng dựa vào cộng đồng / Tài liệu số 11&nbsp;</p><p>Khó khăn giao tiếp với mọi người xung quanh.&nbsp;</p><p>Thay đổi tâm lý, mặc cảm với mọi người xung quanh.&nbsp;</p><p>Đối với trẻ em có khuyết tật/giảm chức năng nhìn, có thể không học hành được hoặc không đi đến trường được. Trẻ có khó khăn khi chơi đùa với các bạn cùng tuổi. Đối với người lớn và trẻ lớn có khuyết tật/giảm chức năng nhìn không có việc làm hoặc không làm việc được và do vậy không có thu nhập cho cuộc sống của họ.</p><p>&nbsp;</p><p><strong>Phát hiện người có khuyết tật/giảm chức năng nhìn:&nbsp;</strong></p><p>Những dấu hiệu để phát hiện trẻ có khuyết tật/giảm chức năng nhìn:&nbsp;</p><p>Mắt, mi mắt đỏ, có mủ hoặc thường xuyên chảy nước mắt.&nbsp;</p><p>Mắt trông mờ, đục hoặc nhăn nheo hoặc có tổn thương đau.&nbsp;</p><p>Một hoặc cả hai bên đồng tử có màu xám hoặc trắng.&nbsp;</p><p>Trẻ 3 tháng tuổi vẫn không nhìn theo đồ chơi hoặc sự vật khi đưa qua mặt trẻ.&nbsp;</p><p>Trẻ 3 tháng tuổi vẫn không đưa tay với đồ chơi ở trước mặt trẻ, trừ khi đồ chơi này phát ra tiếng động hoặc chạm vào trẻ.&nbsp;</p><p>Mắt “lệch”, 2 mắt không di động cùng hướng với nhau.&nbsp;</p><p>Mắt lác.&nbsp;</p><p>Trẻ chậm sử dụng tay, vận động và đi lại so với trẻ khác. Trẻ thường va đụng vào đồ vật hoặc rất vụng về.&nbsp;</p><p>Trẻ không thích thú với tranh ảnh, sách, đồ chơi có màu sắc khi để những thứ này sát mặt.&nbsp;</p><p>Nhìn khó khăn khi trời tối (quáng gà).&nbsp;</p><p>Ở trường trẻ không đọc được chữ ở trên bảng hoặc những chữ nhỏ trong sách. Trẻ bị mệt mỏi, đau đầu khi đọc sách.&nbsp;</p><p>Trẻ có thể bị mù hoặc khuyết tật/giảm chức năng nhìn phối hợp với các dạng khuyết tật khác như bại não, chậm phát triển trí tuệ...&nbsp;</p><p>Đối với người lớn có khuyết tật/giảm chức năng nhìn có thể phát hiện nếu người đó không nhìn thấy một vật từ xa hoặc gần, không nhìn thấy những người xung quanh, không thể làm việc hoặc tham gia các công việc của gia đình và xã hội.</p>
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
        for ($i=1; $i <= 27; $i++) {
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
        for ($i=1; $i <= 7; $i++) {
            DB::table('follow_list')->insert([
                ['accUsername'=>$i,'novelID'=>rand(1,7)],
                ['accUsername'=>$i,'novelID'=>rand(8,16)],
                ['accUsername'=>$i,'novelID'=>rand(17,27)],
            ]);
        }
    }
}

class AnotherTitle extends Seeder{
    public function run()
    {
        DB::table('another_title')->insert([
            ['novelID'=>1,'title'=>'To Have Good Memory'],
            ['novelID'=>2,'title'=>'Business Model Creation'],
            ['novelID'=>3,'title'=>'New Confession Of An Economic Assassin'],
            ['novelID'=>4,'title'=>'The Giants In The Business World'],
            ['novelID'=>5,'title'=>'If I Know When I Have 20'],
            ['novelID'=>6,'title'=>'Outliers'],
            ['novelID'=>7,'title'=>'36 Design In Modern Business'],
            ['novelID'=>8,'title'=>'Think & Grow Rich'],
            ['novelID'=>9,'title'=>'Golden Rule Of Napoleon Hill'],
            ['novelID'=>10,'title'=>'Steeped Heart'],
            ['novelID'=>11,'title'=>'Disney Wars'],
            ['novelID'=>12,'title'=>'From Good To Great'],
            ['novelID'=>14,'title'=>'A to Z Marketing Insights'],
            ['novelID'=>15,'title'=>'Securities Investment And Trading Secrets'],
            ['novelID'=>16,'title'=>"It's never failed! All Challenges"],
            ['novelID'=>17,'title'=>'W. Buffett Investment Strategy'],
            ['novelID'=>18,'title'=>"Phan Thien An's Secret"],
            ['novelID'=>19,'title'=>'Great Lessons From Warren Buffett'],
            ['novelID'=>20,'title'=>'Successful Habits of Self-Made Millionaires'],
            ['novelID'=>21,'title'=>'The Way Of Warren Buffett'],
            ['novelID'=>22,'title'=>'Born To Be Steve Jobs'],
            ['novelID'=>23,'title'=>'나 혼자만 레벨업'],
            ['novelID'=>24,'title'=>'나 혼자만 레벨업'],
            ['novelID'=>25,'title'=>'나 혼자만 레벨업'],
            ['novelID'=>26,'title'=>'나 혼자만 레벨업'],
            ['novelID'=>27,'title'=>'나 혼자만 레벨업'],
        ]);
    }
}
