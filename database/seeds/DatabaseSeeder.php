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
            ['title'=>'Bác Sĩ Tốt Nhất Là Chính Mình','author'=>'Hồng Chiêu Quang','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://www.nxbtre.com.vn/Images/Book/nxbtre_full_25442019_034453.jpg',
            'description'=>'Nếu bạn nghèo khó, không đủ sức mua thuốc men giá đất, hãy đọc quyển sách này! Nếu bạn giàu có nhưng lại kém sức khỏe và kém vui, hãy đọc quyển sách này! Chỉ cần trích 4 giở ít ỏi đọc kỷ quyển sách này, nó sẽ mang lại 36.000 ngày thu hoạch quí giá cho cả cuộc đời bạn!'],

            ['title'=>'Bạn Đắt Giá Bao Nhiêu','author'=>'Vãn Tình','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1535385655l/40017002._SX318_.jpg',
            'description'=>'Chúng ta cứ nghĩ thỏa hiệp đôi chút, nhượng bộ đôi chút thì thế giới này sẽ cho ta một góc nhỏ nhoi, nhưng cuối cùng ngoài việc đánh mất ngày càng nhiều thứ thì chúng ta chẳng nhận lại được gì, chỉ có những oán hận là tích tụ theo những tháng năm.'],

            ['title'=>'Cuộc Đời Là Do Bạn Quyết','author'=>'Nguyễn Minh Phương','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://newshop.vn/public/uploads/products/17577/cuoc-doi-la-do-ban-quyet-dinh.jpg',
            'description'=>'Cuốn sách CUỘC ĐỜI LÀ DO BẠN QUYẾT dạy cách thiết lập tầm nhìn cho tương lai, loại bỏ những rào cản trong tiềm thức, tạo ra một cuộc sống tràn đầy sức khỏe, thành công, niềm vui và hạnh phúc - một cuộc sống mà bạn xứng đáng có được.'],

            ['title'=>'Góc Nhìn Diệu Kỳ Của Cuộc Sống','author'=>'John Perkins','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://salt.tikicdn.com/cache/w444/media/catalog/product/h/_/h_t_gi_ng_t_m_h_n_14_1.jpg',
            'description'=>'Mỗi câu chuyện, như một sắc màu, lại chuyển tải một thông điệp khác nhau, cho chúng ta cơ hội chiêm nghiệm những cung bậc và sắc màu đa dạng của cuộc sống. Dù là bài ca về tình đôi lứa, nghĩa vợ chồng hay khúc hát về tình mẫu tử, thì những câu chuyện nhỏ này cũng gửi gắm đến ta thông điệp về ý nghĩa và sức mạnh của tình yêu thương.'],

            ['title'=>'Sống Hết Mình Cho Ngày Hôm Nay','author'=>'Taketoshi Ozawa','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://cdn0.fahasa.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/o/song_het_minh_cho_ngay_hom_nay___tang_kem_bookmark_1_2018_12_29_00_40_06.jpg',
            'description'=>'Mỗi câu chuyện, như một sắc màu, lại chuyển tải một thông điệp khác nhau, cho chúng ta cơ hội chiêm nghiệm những cung bậc và sắc màu đa dạng của cuộc sống. Dù là bài ca về tình đôi lứa, nghĩa vợ chồng hay khúc hát về tình mẫu tử, thì những câu chuyện nhỏ này cũng gửi gắm đến ta thông điệp về ý nghĩa và sức mạnh của tình yêu thương.'],

            ['title'=>'Để Có Trí Nhớ Tốt','author'=>'Vương Trung Hiếu','status'=>'Đã hoàn thành','type'=>'Sách self-help','publishYear'=>'2018','language'=>'Tiếng Việt','rating'=>'G',
            'cover'=>'https://4.bp.blogspot.com/-bygRnm2vy9Y/Wgq0-QP-NdI/AAAAAAAAIyg/jwQ40_igULItGZG2kW0YKuRdcbwl22iXQCLcBGAs/s400/de-co-tri-nho-tot.jpg',
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
            'cover'=>'https://images-na.ssl-images-amazon.com/images/I/91DmkF3MDEL.jpg',
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
        for ($i=1; $i <= 32; $i++) {
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
        for ($i=3; $i <= 32; $i++) {
            $count = 1;
            DB::table('chapter')->insert([
                ['novelID'=>$i, 'number'=>$count++, 'title'=>'Giới Thiệu Chung',
                'content'=>'
                <p>Nếu không xác định được kế hoạch hay hệ thống hóa tốt một phương thức thủ tục, những điều sẽ được chấp nhận và thực thi, thì không có chính phủ, doanh nghiệp hay cơ quan nào có thể hoạt động và quản lý một cách thành công.</p><p>Để phát triển bộ nhớ bạn phải chấp nhận một hệ thống rồi theo đuổi nó, nghĩa là bạn cần thực hành một hệ thống ký ức hay một thuật gợi nhớ. Điều này tương tự như một người có thị lực kém sử dụng kính đeo mắt, anh ta sẽ nhìn rõ hơn, và bạn có thể dùng công cụ này để cải thiện khả năng nhớ của bạn.</p><p>Bạn sẽ tìm hiểu về một “bộ nguyên tắc", chẳng bao lâu sau khi hiểu và thông thạo bộ này bạn sẽ sai khiến chúng như những người hầu. Tuy nhiên, bạn sẽ không trở thành chủ của chúng nếu không áp dụng chúng bằng hành động cụ thể! Một khi bạn đã sử dụng chúng rồi thì nghệ thuật ghi nhớ sẽ trở thành người hầu biết vâng lời bạn.</p><p><strong>BA BÍ MẬT CỦA BỘ NHỚ MÁY TƯ DUY</strong></p><p>Đã bao nhiêu lần bạn nghe người khác nói “Điều đó nhắc nhở tôi”? Và bao nhiêu lần bạn đã thấy hoặc nghe điều gì đó gợi ý khiến bạn kêu ồ lên? Khi điều này xảy ra chính là lúc ta được nhắc bằng một quá trình gọi là sự liên tưởng không kiểm soát. Từ cái này ta liên tưởng rồi nhớ đến một cái khác, tuy nhiên trong lúc ấy khả năng nhớ của ta có thể không nhiều. Ta buộc phải chiến đấu, dò dẫm và tìm lại ý nghĩ “đã mất” đó.</p><p>Để phát triển khả năng nhớ lại thông tin trong tương lai, bạn cần sử dụng một hệ thống có thể giúp bạn định vị ký ức và kéo nó ra. Điều này được thực hiện bằng sự liên tưởng kiểm soát.</p><p>Bạn có thể tạo ra sự liên tưởng có kiểm soát bằng cách sắp đặt ngăn nắp kho chứa nằm trong não bạn, sắp dặt bằng những hình ảnh cố định đã được khắc sâu trong tâm trí.</p><p>Những ý nghĩ mà bạn nhớ lại đã được gởi hoặc ấn định ở một số nơi cụ thể bằng một cách nào đó và về sau bạn có thể nối kết lại được với chúng. Thực hiện được điều này, có nghĩa là bạn đã thật sự nhìn chăm chú vào ngân hàng ký ức của bạn, với lấy từ một ngăn nào đó trong kho chứa đã được chỉ định rồi nhớ lại dữ liệu trong tập tin.</p>
                '],

                ['novelID'=>$i, 'number'=>$count++, 'title'=>'Những Vấn Đề Mà Người Khuyết Tật Và Gia Đình Gặp Phải',
                'content'=>'
                <p><strong>Đối với cả trẻ em và người lớn, các vấn đề thường gặp phải:&nbsp;</strong></p><p>Hạn chế di chuyển và định hướng được không gian, vị trí của mình đang ở đâu nếu đến nơi khác với nhà của mình.&nbsp;</p><p>Khó khăn trong việc thực hiện các chức năng sinh hoạt hàng ngày như tắm rửa, vệ sinh cá nhân, ăn uống và các công việc khác.&nbsp;</p><p>Khó khăn trong việc hoà nhập xã hội. 4 Phục hồi chức năng dựa vào cộng đồng / Tài liệu số 11&nbsp;</p><p>Khó khăn giao tiếp với mọi người xung quanh.&nbsp;</p><p>Thay đổi tâm lý, mặc cảm với mọi người xung quanh.&nbsp;</p><p>Đối với trẻ em có khuyết tật/giảm chức năng nhìn, có thể không học hành được hoặc không đi đến trường được. Trẻ có khó khăn khi chơi đùa với các bạn cùng tuổi. Đối với người lớn và trẻ lớn có khuyết tật/giảm chức năng nhìn không có việc làm hoặc không làm việc được và do vậy không có thu nhập cho cuộc sống của họ.</p><p>&nbsp;</p><p><strong>Phát hiện người có khuyết tật/giảm chức năng nhìn:&nbsp;</strong></p><p>Những dấu hiệu để phát hiện trẻ có khuyết tật/giảm chức năng nhìn:&nbsp;</p><p>Mắt, mi mắt đỏ, có mủ hoặc thường xuyên chảy nước mắt.&nbsp;</p><p>Mắt trông mờ, đục hoặc nhăn nheo hoặc có tổn thương đau.&nbsp;</p><p>Một hoặc cả hai bên đồng tử có màu xám hoặc trắng.&nbsp;</p><p>Trẻ 3 tháng tuổi vẫn không nhìn theo đồ chơi hoặc sự vật khi đưa qua mặt trẻ.&nbsp;</p><p>Trẻ 3 tháng tuổi vẫn không đưa tay với đồ chơi ở trước mặt trẻ, trừ khi đồ chơi này phát ra tiếng động hoặc chạm vào trẻ.&nbsp;</p><p>Mắt “lệch”, 2 mắt không di động cùng hướng với nhau.&nbsp;</p><p>Mắt lác.&nbsp;</p><p>Trẻ chậm sử dụng tay, vận động và đi lại so với trẻ khác. Trẻ thường va đụng vào đồ vật hoặc rất vụng về.&nbsp;</p><p>Trẻ không thích thú với tranh ảnh, sách, đồ chơi có màu sắc khi để những thứ này sát mặt.&nbsp;</p><p>Nhìn khó khăn khi trời tối (quáng gà).&nbsp;</p><p>Ở trường trẻ không đọc được chữ ở trên bảng hoặc những chữ nhỏ trong sách. Trẻ bị mệt mỏi, đau đầu khi đọc sách.&nbsp;</p><p>Trẻ có thể bị mù hoặc khuyết tật/giảm chức năng nhìn phối hợp với các dạng khuyết tật khác như bại não, chậm phát triển trí tuệ...&nbsp;</p><p>Đối với người lớn có khuyết tật/giảm chức năng nhìn có thể phát hiện nếu người đó không nhìn thấy một vật từ xa hoặc gần, không nhìn thấy những người xung quanh, không thể làm việc hoặc tham gia các công việc của gia đình và xã hội.</p>
                '],

                ['novelID'=>$i, 'number'=>$count++, 'title'=>'Đôi Điều Về Trí Nhớ',
                'content'=>'
                <p>Nếu không xác định được kế hoạch hay hệ thống hóa tốt một phương thức thủ tục, những điều sẽ được chấp nhận và thực thi, thì không có chính phủ, doanh nghiệp hay cơ quan nào có thể hoạt động và quản lý một cách thành công.</p><p>Để phát triển bộ nhớ bạn phải chấp nhận một hệ thống rồi theo đuổi nó, nghĩa là bạn cần thực hành một hệ thống ký ức hay một thuật gợi nhớ. Điều này tương tự như một người có thị lực kém sử dụng kính đeo mắt, anh ta sẽ nhìn rõ hơn, và bạn có thể dùng công cụ này để cải thiện khả năng nhớ của bạn.</p><p>Bạn sẽ tìm hiểu về một “bộ nguyên tắc", chẳng bao lâu sau khi hiểu và thông thạo bộ này bạn sẽ sai khiến chúng như những người hầu. Tuy nhiên, bạn sẽ không trở thành chủ của chúng nếu không áp dụng chúng bằng hành động cụ thể! Một khi bạn đã sử dụng chúng rồi thì nghệ thuật ghi nhớ sẽ trở thành người hầu biết vâng lời bạn.</p><p><strong>BA BÍ MẬT CỦA BỘ NHỚ MÁY TƯ DUY</strong></p><p>Đã bao nhiêu lần bạn nghe người khác nói “Điều đó nhắc nhở tôi”? Và bao nhiêu lần bạn đã thấy hoặc nghe điều gì đó gợi ý khiến bạn kêu ồ lên? Khi điều này xảy ra chính là lúc ta được nhắc bằng một quá trình gọi là sự liên tưởng không kiểm soát. Từ cái này ta liên tưởng rồi nhớ đến một cái khác, tuy nhiên trong lúc ấy khả năng nhớ của ta có thể không nhiều. Ta buộc phải chiến đấu, dò dẫm và tìm lại ý nghĩ “đã mất” đó.</p><p>Để phát triển khả năng nhớ lại thông tin trong tương lai, bạn cần sử dụng một hệ thống có thể giúp bạn định vị ký ức và kéo nó ra. Điều này được thực hiện bằng sự liên tưởng kiểm soát.</p><p>Bạn có thể tạo ra sự liên tưởng có kiểm soát bằng cách sắp đặt ngăn nắp kho chứa nằm trong não bạn, sắp dặt bằng những hình ảnh cố định đã được khắc sâu trong tâm trí.</p><p>Những ý nghĩ mà bạn nhớ lại đã được gởi hoặc ấn định ở một số nơi cụ thể bằng một cách nào đó và về sau bạn có thể nối kết lại được với chúng. Thực hiện được điều này, có nghĩa là bạn đã thật sự nhìn chăm chú vào ngân hàng ký ức của bạn, với lấy từ một ngăn nào đó trong kho chứa đã được chỉ định rồi nhớ lại dữ liệu trong tập tin.</p>
                '],

                ['novelID'=>$i, 'number'=>$count++, 'title'=>'Cách Phát Triển Bộ Nhớ',
                'content'=>'
                <p><strong>TRÍ NHỚ LÀ GÌ?</strong></p><p>Trí nhớ là khả năng ghi nhận, tồn trữ và hồi tưởng được các thông tin của não người. Nói cách khác, nó giữ lại được mọi kinh nghiệm thông qua quá trình hoạt động của trí não.Thông thường, hoạt động của trí nhớ gồm có ba giai đoạn:</p><p>Tiếp nhận và ghi lại những gì đã tri giác được từ tai, mắt, mũi.</p><p>Lưu trữ những thông tin đã tiếp nhận.</p><p>Nhớ lại những thông tin đã lưu trữ.Con người có nhiều dạng trí nhớ, trong đó có ba dạng phổ biến nhất: trí nhớ thị giác, trí nhớ thính giác và trí nhớ vận động.</p><p>Người nào có trí nhớ thị giác thì thường nhớ rất lâu những gì đã được nhìn thấy.</p><p>Người có trí nhớ thính giác lại nhớ rất tốt những gì đã nghe được.</p><p>Còn người có trí nhớ vận động thì cần phải viết hay đọc đi đọc lại nhiều lần điều gì đấy mới nhớ dai được.</p><p><strong>RỐI LOẠN TRÍ NHỚ.</strong></p><p>Theo Thạc sĩ y khoa Cao Phi Phong, rối loạn trí nhớ gồm có những dạng sau:</p><p>Sự giảm nhớ: dù những việc xảy ra đã lâu hay mới đây, người bị dạng này bị giảm khả năng nhớ lại một cách đáng kể.</p><p>Quên: bao gồm quên tốt cả các sự việc diễn ra trong quá khứ hay quên từng phần quá khứ, quên một số việc đã diễn ra dù mới hay cũ. Người bị rối loạn trí nhớ có thể bị quên thuận chiều, nghĩa là quên những việc vừa xảy ra trong quá khứ gần, vài giờ hoặc vài tuần sau khi bệnh hay bị quên ngược chiều, còn gọi là quên xa, quên những việc xảy ra vài tháng trước khi bệnh. Ngoài ra, rối loạn trí nhớ có thể dẫn tới việc:</p><p>Quên trong cơn: “quên sự việc xảy ra trong con như cơn vắng ý thức”.</p><p>Quên do ghi nhận kém và nhớ lại kém: việc ghi nhận kém dẫn tói cái gọi là quên gần, tức không nhớ những sự việc vừa xảy ra; còn việc nhở lại kém dưa tới sự quèn xa, tức là quên những việc đã xảy ra từ rất lâu.</p><p>Quên tiến triển: sự việc xảy ra gần dây thì quên trước, còn sự việc diễn ra từ lâu thì quên sau. Cối quên này tăng đần theo thời gian của người bệnh.</p><p>Loạn nhớ: nhớ nhầm thời gian diễn ra sự việc trong quá khứ hay nhớ nhầm những việc xảy ra của người khác là của mình.</p><p>Tăng nhớ: nhớ lại những sự việc diễn ra từ rất lâu, không có ý nghĩa gì trong hiện tại hay chỉ nhớ những chi tiết vụn vặn, không ăn khớp với nhau.</p>
                '],
            ]);
        }

        DB::table('chapter')->insert([
            ['novelID'=>1, 'number'=>1, 'title'=>'Quan niệm',
            'content'=>'
            <p>Theo nguyên lý sinh học, con người có thể sông tới 120 tuổi. Nhưng trên thực tế, con người đâ mắc bệnh, tàn tật rồi tử vong trước thời gian đó. Vậy thì thật ra người ta có thể thọ đến bao nhiêu tuổi? Theo định nghĩa của Tổ chức Y tế thế giới, giai đoạn trung niên phải là trước tuổi 65, từ 65-74 là người cao tuổi trẻ, còn 75-90 tuổi mới chính thức là người già, 90 tuổi đến 120 tuổi mới là người cao tuổi già.&nbsp;</p><p>Theo nguyên lý của sinh học, tuổi thọ của động vật có vú gấp 5-6 lần so với giai đoạn sinh trưởng của chúng. Nếu giai đoạn sinh trưởng của con người đưỢc tính từ thời điểm mọc chiếc răng sau cùng (từ 20-25 tuổi), thì tuổi thọ ngắn nhất phải là 100 tuổi, dài nhất là 150 tuổi, nên tuổi thọ bình quân được công nhận phải là 120 tuổi. Trong suốt quá trình 120 năm đó, nếu chúng ta có thể giữ gìn sức khỏe, đạt tới tiêu chuẩn trước 70 tuổi không có bệnh tật, 80, 90 tuổi vẫn khỏe mạnh, thì sống tới 100 tuổi sẽ chẳng 11 còn là ước mơ hão huyền, vì đó là qui luật sinh học bình thường.&nbsp;</p><p>Nhưng khi nhìn lại thực tế cuộc sống, tuổi thọ bình quân chỉ dạt tới 70, nghĩa là sống ít hơn 50 tuổi so với qui luật thường. Còn đáng lẽ phải sống khỏe mạnh tới 70-90 tuổi, con người lại sớm đau yếu lúc bước vào ngưỡng cửa 40, mắc chứng bệnh nhồi máu cơ tim lúc 50, chết khi mới hơn 60, cũng là sớm có bệnh hơn 50 năm với qui luật bình thường. Sớm mắc bệnh, sớm tàn tật, sớm tử vong đã trở thành hiện tượng phổ biến ữong xã hội thời nay.&nbsp;</p><p>Xưa kia, người ta thường quan niệm rằng: Người giàu có ăn không ngồi rồi, sức khỏe mới yếu, thật ra, thiếu hiểu biết về chăm sóc sức khỏe ban đầu mới là nguyên nhân chính dân tới sức khỏe yếu. So sánh giữa người da trắng và da đen sinh sống ở Mỹ, người da ưắng kinh tế khá, đời sông vật chất hơn hẳn người da đen, tỉ lệ mắc chứng bệnh cao huyết áp, nhồi máu cơ tim và img thư cũng ít hơn nhiều so với người da đen. Vì vậy tuổi thọ cũng cao hơn.&nbsp;</p><p>Giới trí thức ở Mỹ có địa vị cao, thu nhập cao, tỉ lệ mắc bệnh cũng thấp hơn so với giới công nhân thợ thuyền. Nguyên do là giới trí thức ở Mỹ có nền giáo dục về sức khỏe, kiến thức vệ sinh, ý thức bảo vệ sức khỏe cao hơn. Theo số liệu thống kê của tôi, nhiều học sinh tiểu học ở Bắc Kinh đã mắc chứng bệnh cao huyết áp, học sinh trung học đã bị chứng xơ cứng động mạch.&nbsp;</p><p>Khi kinh tế phát ữiển, đời sống 12 vật chất ngày càng cải thiện, lẽ ra con người phải sông tốtt, sống khỏe hơn nữa mới đúng, nhưng tại sao có nhiều người lại chết sớm hơn?</p>',
            'audio'=>'https://drive.google.com/file/d/1uunyQUBY-03aAzWNilMbeoMfyuQoz9Zk/view?usp=sharing'],

            ['novelID'=>1, 'number'=>2, 'title'=>'Nhiều người không chết do bệnh tật mà chết vì ngu dốt',
            'content'=>'
            <p>Xin kể với các bạn một chuyện thật 100%. Có một người đàn ông chỉ vì khuân số cải trắng trị giá 12 đồng (nhân dân tệ) lên lầu, mà dẫn tới hậu quả phải tốn 6 vạn đổng tiền thuốc 13 men, suýt chút thì bỏ mạng! Nếu trước dó ông ta có kiến thức về sức khỏe, biết ràng một con người xưa nay ít làm việc nặng đột nhiên quá gượng sức sẽ có hậu quả thảm hại ra sao, thì sẽ chẳng bao giờ mắc sai lầm tương tự. Hiện nay có những căn bệnh nào uy hiếp tới tính mạng của chúng ta?&nbsp;</p><p>Theo thống kê, chứng bệnh tim mạch đứng đầu bảng, vào năm 2000 trên toàn thế giới có tới 20 triệu người chết vì căn bệnh này, chiếm 1/3 tổng số người tử vong.&nbsp;</p><p>Tổng giám đốc của Tổ chức Y tế thế giới đã phát biểu: Chỉ cần áp dụng tốt biện pháp dự phòng sẽ giúp giảm hơn phân nửa số tử vong. Có nghĩa là có một nửa trường hỢp tử vong đáng lý có thể ngăn chặn. Nên các chuyên gia cho rằng: Nhiều người không chết vì tật bệnh mà là chết vì dốt kiến thức y học. Muôn không chết bởi ngu dốt, chết bởi thiếu hiểu biết, hãy ngăn chặn những căn bệnh ngay từ ban đầu.&nbsp;</p><p>Xin đơn cử một ví dụ: Một ông cụ đang mang trên mình chứng nhồi máu cơ tim, cần tránh mọi sự căng thẳng, gắng gượng quá sức. Vậy mà do thiếu hiểu biết, có lần thu dọn nhà cửa, thay vì chỉ nên khuân một lần 2 đến 3 quyển sách, ông đã khuân một lần cả chồng sách, gắng gưỢng quá sức, tim đột nhiên ngừng đập. Tuy cấp cứu kịp thời, tim đập trở lại, nhưng do thiếu oxy nên bị nhũn não, ưở thành người thực vật, nằm bất động trên giường bệnh.&nbsp;</p><p>Nếu ông cụ có kiến thức y học dự phòng, biết người lớn tuổi tuyệt đối không nên lao động quá sức thì đã chẳng xảy ra cơ sự. Trong thời kỳ kinh tế còn bao cấp, một người đàn ông sống ở Bắc Kinh mua rất nhiều cải ữắng về nhà, không ngờ hôm sau có tuyết rơi, do lo cải ữắng đặt ở ngoài sân bị tuyết làm hư 14 hỏng, nên đã gắng sức khuân chiing lên lầu ba, cứ nhiều lần lên xuống để vác cho hết 50kg cải.&nbsp;</p><p>Do ngày thường ít lao động chân tay, nên ông ta thở hổn hển, rồi ho dữ dội, cuối cùng ho ra máu, đành phải đưa di cấp cứu. Chúng tôi tới kiểm tra, mới biết ông ấy đang bị nhồi máu cơ tim (myocardial iníarction) câp tính, suy tim trái cấp tính, phải tiêm ngay một mũi thuốc đặc trị. Thưa các bạn, giá Ig vàng ở Trung Quốc lúc đó mới 100 tệ, 0,lg chỉ 10 tệ, thế mà mũi tiêm đó đáng giá 15000 tệ, may mà còn công hiệu, để làm tan khối máu, phải tốn tất cả 6 vạn tệ, ông mới lành bệnh.&nbsp;</p><p>Sau này làm thử một bài toán, 50kg cải trắng chỉ đáng giá 12 tệ, ông ta vì hà tiện 12 tệ mà dẫn tới hậu quả phải tốn 6 vạn tệ, suýt chút mất mạng, thật chẳng đáng chút nào! Nếu xưa nay ông ấy có hiểu biết về y học dự phòng, thì chẳng xảy ra điều đáng tiếc này!</p>',
            'audio'=>'https://drive.google.com/file/d/1Xl_tYVhl305JY0jknnmX_jE85JfAfQj4/view?usp=sharing'],

            ['novelID'=>1, 'number'=>3, 'title'=>'Điều trị mắc tiền chẳng bằng dự phòng từ ban đầu',
            'content'=>'
            <p>Tôi chợt nghĩ, ông chủ này thật thông minh, vì công nhân viên của ông suốt một năm qua chưa nghỉ bệnh, giúp ông tiết kiệm biết bao nhiêu là chi phí thuốc men, nay chỉ thưởng cho họ một ít quà, nếu so với giá trị lao động của họ sáng tạo ra thì thật chẳng đáng là bao!&nbsp;</p><p>Tuy nhiên, để động viên công nhân viên yêu thích thể thao, ông cũng bỏ ra khá nhiều kinh phí để xây hồ bơi, sân chơi tennis, phòng tập thể dục trong công ty.&nbsp;</p><p>Sau khi về Bắc Kinh, tôi thấy nhiều chủ tịch công đoàn, lãnh đạo đơn vị đều sắp xếp thời gian thăm những công nhân viên bị bệnh nặng, càng bệnh nặng, càng nhiều người tới hỏi thăm, chỉ có người khỏe chẳng ai màng tới.&nbsp;</p><p>Nói như vậy, không có nghĩa là không nên hỏi han người bệnh, song người khỏe càng đáng được khích lệ động viên để mọi người đều côí gắng sông thật khỏe mạnh, vui tươi.&nbsp;</p><p>Qua đó cho thây Trung Quôíc xưa nay chỉ chú trọng việc điều trị bệnh, bệnh viện chúng tôi mỗi lần có cán bộ nằm viện tốn ít nhất cũng vài ngàn tệ, nghĩa là có khi nhà nước phải tốn hàng trăm vạn tệ cho công tác điều trị, nhưng lại không chịu tốn một xu cho công tác dự phòng. Theo kết luận nghiên cứu của các chuyên gia: chỉ cần tốn 1 đô la cho công tác dự phòng bệnh tim mạch, sẽ tiết kiệm được 8,59 đô la chi phí điều ứị về sau.&nbsp;</p><p>Đồng thời tiết kiệm khoảng 100 đô la chi phí cấp cứu, Bản thân tôi cũng làm thông kê điều tra ở một vùng nông thôn, có một hộ nông dân thu nhập hàng năm khoảng 20 vạn tệ, khá giàu có, chỉ tiền lì xì cho con cháu nhân dịp xuân về cũng tốn hơn vài ngàn tệ, song khi tới điều tra về vệ sinh môi trường, mới tá hỏa ra cả nhà 7 người chỉ dùng chimg một bàn chải đánh răng, vì họ cho rằng đánh răng là chuyện thừa, có cũng được, không cũng chẳng sao, cả nhà họ có tới 4 người mắc chứng bệnh cao huyết áp.&nbsp;</p><p>Thật ra, giữ vệ sinh răng miệng có khả năng giúp giảm bớt rất nhiều chứng bệnh, như xơ cứng động mạch, bệnh tim.&nbsp;</p><p>Ở phương Tây, vấn đề vệ sinh răng miệng là việc quan ữọng hàng đầu, Tổ chức Y tế thế giới cũng luôn nhấn mạnh tác dụng của việc vệ sinh răng miệng. Tóm lại, việc thay đổi quan niệm là điều cấp bách, nhằm chuyển biến nhận thức từ ưị bệnh sang phòng bệnh.</p>',
            'audio'=>'https://drive.google.com/file/d/10y3Ndgjy2E4WjPvQ54XY7l0MhwzAv6WM/view?usp=sharing'],
        ]);

        DB::table('chapter')->insert([
            ['novelID'=>2, 'number'=>1, 'title'=>'Sự Thỏa Hiệp Có Làm Bạn Hạnh Phúc ?',
            'content'=>'
            <p>Cô bạn S của tôi rất mê sườn xám, mỗi lần họp mặt lại thấy mặc một bộ sườn xám khác nhau. Cô ấy bảo rằng, kiếp này giấc mộng lớn nhất là mở tiệm sườm xám ngày ngày mặc sườn xám để đón khách.&nbsp;</p><p>Chúng tôi đều ủng hộ ý tưởng ấy,cho rằng chắc chắn S sẽ kinh doanh tốt, bởi vì cô ấy yêu sườn xám đến thế cơ mà.&nbsp;</p><p>Dưới sự ủng hộ của chúng tôi, S quyết định bất chấp tất cả để mở tiệm, đời này cô ấy chỉ có một ước muốn nhỏ nhoi như vậy, không làm được thì chẳng mất chốc mà già.&nbsp;</p><p>Thế là S bắt đầu tìm kiếm địa điểm mở tiệm, nguồn nhập hàng, bận tới tối tăm mặt mũi.Tới khi họp mặt, chúng tôi hỏi bao giờ thì tiệm sườn xám khai trương, chắc chắn sẽ tới ủng hộ.&nbsp;</p><p>S đang trò chuyện vui vẻ, nghe chúng tôi hỏi vậy thì bỗng ủ rũ chán nản, cô ấy than, không mở tiệm được, nói rồi thở dài buồn bãChúng tôi vội hỏi, rốt cuộc cô ấy gặp khó khăn gì, nói ra xem chúng tôi có giúp được không.</p><p>S do dự một thoáng rồi đáp, chồng cô ấy không đồng ý, cho rằng công việc hiện tại của cô vừa ổn định vừa vẻ vang, thu nhập cũng tốt, lại tiện chăm sóc cha mẹ con cái.&nbsp;</p><p>Nếu mở tiệm thì thời kì đầu, tiền vốn và thời gian bỏ ra cho nó sẽ cực kì lớn, hơn nữa S lại chưa có kinh nghiệm kinh doanh, nên chồng không tin tưởng năng lực của cô.&nbsp;</p><p>Anh ta nghĩ ý tưởng này quá bốc đồng, còn bảo thêm cha mẹ đôi bên cùng tạo áp lực, cha mẹ cũng khuyên cô đừng liều lĩnh, đang yên đang lành tự nhiên mở tiệm làm gì !&nbsp;</p><p>Nếu tiệm làm ăn chẳng ra sao mà tình cảm vợ chồng còn bị ảnh hưởng thì đúng là mất nhiều hơn được.</p><p>Dưới sự phản đối của tất cả mọi người, S do dự, dù rằng cô ấy rất yêu sườn xám, dù rằng giấc mộng ấp ủ bao lâu nay là mở một tiệm sườn xám, nhưng cô ấy cũng đành từ bỏ ý tưởng này.</p><p>Chúng tôi đều thở dài, chẳng biết nói gì thêm, dù sao đó là cuộc đời cô ấy, là lựa chọn của cô ấy, chúng ta nên tôn trọng thì hơn.Trên đường về, S tự giễu : " Tớ tưởng tớ chỉ thỏa thiệp một lần, ai ngờ tớ lại thỏa hiệp cả đời.&nbsp;</p><p>Tôi quen S rất nhiều năm, cô ấy vừa hiền lành vừa tốt tính, chẳng tranh chấp với ai bao giờ, gặp chuyện gì cũng nghĩ cho người ta trước.Khi học đại học.</p><p>S muốn học ngành Âm nhạc nhưng trong mắt cha mẹ cô ấy thì đó không phải nghề tử tế, học cũng chẳng làm gì. Họ buộc S phải chọn học ngành Tài Chính vì cô của S là giám đốc một chi nhánh ngân hàng.&nbsp;</p><p>S rất buồn nhưng cuối cùng vẫn vâng lời cha mẹ, chọn học ngành Tài Chính mà cô ấy chẳng hề yêu thích.</p>',
            'audio'=>'https://drive.google.com/file/d/11wqPCMVEQs1U4uirIkTRupjaPoF4SdAi/view?usp=sharing'],

            ['novelID'=>2, 'number'=>2, 'title'=>'Không Cần Trở Thành Một Cô Gái Được Tất Cả Mọi Người Yêu Quý',
            'content'=>'
            <p>Tôi có một cô bạn thân rất tốt, tạm gọi cô ấy là Đương Đương nhé. Hồi mới quen nhau, cô ấy vừa độc miệng vừa sắc sảo, chỉ cần biết tôi và ông xã cãi nhau là cô ấy đã muốn cho tôi một bạt tai, rồi kéo tai tôi ra mà hét: "Buồn phiền vì một người đàn ông, sao cậu kém cỏi thế hả, không thích thì lấy người khác chứ sao !"</p><p>Ban đầu tôi cũng không chịu nổi nhưng về sau thân hơn tôi mới quen dần với cách biểu đạt mạnh bạo của cô ấy. Đến giờ thì tôi cực kỳ yêu quý Đương Đương. Vì cô ấy sống quá phóng khoáng luôn tràn đầy sức sống, có thể thẳng thắn cự tuyệt một người, cũng có thể lạnh lùng đáp trả ác ý của người khác, hoàn toàn sống theo ý nguyện của mình. Song tôi cũng rất lo lắng, có lần tôi hỏi Đương Đương rằng nếu sống tùy ý như vậy, không sợ đắc tội với người khác sao ?</p><p>Đương Đương lườm tôi đầy khinh bỉ " Thế cậu thấy tớ có thiếu bạn bè không ?"</p><p>Tôi ngẫm nghĩ lại thì bỗng nhận ra, cô ấy còn nhiều bạn hơn khối người, đầy cô gái dịu dàng chu đáo hơn cả Đương Đương, còn chẳng được yêu quý bằng cô ấy.</p><p>Hồi ấy Đương Đương chưa nghỉ việc, ở bộ phận co ấy có một cô gái tên là Tiêu Lỵ vào làm. Tính tình của Tiêu Lỵ hoàn toàn trái ngược với Đương Đương- Tiêu Lỵ vừa dịu dàng vừa nhiệt tình, lại vừa tốt bụng. Lần đầu tôi tới thăm Đương Đương, Tiêu Lỵ hết pha trà rồi lại lấy đồ ăn vặt cho tôi, có lúc Đương Đương đi vệ sinh, Tiêu Lỵ sẽ ân cần trò chuyện với tôi, sợ tôi ở một mình thì rất buồn chán, tới trưa cô ấy lại nhiệt tình gọi cơm cho tôi. Tôi thầm cảm thán trong lòng đúng là một cô gái hiền lành ấm áp ! Tôi cũng chẳng che giấu sự quý mến của tôi với Tiêu Lỵ, thẳng thắn hỏi Đương Đương "Cậu có thấy cô gái như vậy sẽ được rất nhiều người quý mến không ? Nếu là đàn ông thì nhất định tớ phải cưới cô ấy "</p><p>Ý ngầm ở đây là Đương Đương nên dịu dàng hơn, Đương Đương tức tối lườm tôi một cái, rồi bảo trong bộ phận chẳng mấy ai thích Tiêu Lỵ cả. Câu trả lời này khiến tôi rất hoang mang, một cô gái tốt bụng như thế, sao lại bị ghét được ?</p><p>Buổi chiều tôi ngồi lướt web trong văn phòng Đương Đương, Tiêu Lỵ quay lại phòng nghỉ, ôm theo một túi hoa quả, phát cho từng người trong phòng làm việc. Nhưng cô ấy chỉ nhận được hai chữ cảm ơn lạnh lùng từ người khác, có người còn chỉ ờ một tiếng, chỉ vào một chỗ nào đó trên bàn làn việc, ý bảo hãy đặt ở đó, còn có người thẳng thắn bảo không cần. Đi hết một vòng nhưng cô gái này thậm chí không nhận được một câu cảm ơn chân thành. Cô ấy lẳng lặng về vị trí của mình, bắt đầu xử lí công việc, bấy giờ có người đồng nghiệp nhận được một cuộc điện thoại, vội xách túi lên: "Tiêu Lỵ, tôi có việc phải ra ngoài một chút, cô giao thứ này cho phòng Tài chính giúp tôi nhé !"</p><p>Tiêu Lỵ lập tức nhiệt tình đồng ý, tỏ vẻ chắc chắn sẽ làm tốt, người kia cười rồi cảm ơn, nhưng sao tôi nghe cái tiếng cảm ơn ấy giả tạo vô cùng. Tiêu Lỵ ngừng giải quyết công việc của mình, vội vã mang văn kiện lên phòng Tài Chính.</p><p>Hai tiếng sau, đồng nghiệp kia quay về, thuận miệng hỏi, Tiêu Lỵ liền nói cô ấy đã giao văn kiện cho ai đó ở trong phòng Tài Chính.</p><p>Người đồng nghiệp kia nghe vậy thì tái mặt " Cô giao cho cô ta làm gì, phải giao cho Tiểu Thẩm mới đúng, biết thế không nhờ cô, đúng là giúp cho xong chuyện."</p><p>Tiêu Lỵ không ngừng xin lỗi, cố gắng giải thích với người kia, nhưng người kia chỉ giận dữ lườm Tiêu Lỵ một cái rồi lầm bầm tức tối đi đến phòng Tài Chính.</p>',
            'audio'=>'https://drive.google.com/file/d/1153lJq0GwwW25Pz-kiLjv5PUT4sK5N_8/view?usp=sharing'],

            ['novelID'=>2, 'number'=>3, 'title'=>'Người Có Nội Tâm Mạnh Mẽ Mới Là Người Chiến Thắng Cuối Cùng',
            'content'=>'
            <p>H- bạn tôi là người phụ nữ của công việc, bình thường chúng tôi rất ít khi gặp nhau. Đợt này tôi đi công tác ở thành phố của H nên quyết định tới thăm cô ấy một chuyến.Khi tới tòa nhà văn phòng nơi H làm việc tôi phát hiện tầng hai toà nhà đang treo biển cho thuê. Tôi sửng sốt nhưng cũng không mấy bất ngờ, thầm nghĩ:&nbsp;</p><p>Cuối cùng cô ấy cũng thắng.Văn phòng của H nằm ở tầng ba, khi tôi bước vào, cô ấy đang ngồi trước tường kính của văn phòng làm việc, vừa uống cà phê vừa thưởng thức dòng xe đi lại như mắc cửi bên ngoài.&nbsp;</p><p>Tôi nghi ngờ phút này chắc chắn cô ấy rất vui vẻ.Tôi đưa tay chào: "Cuối cùng kẻ đó cũng thua rồi ?" H mỉm cười đầy tự tin "Chỉ là chuyện sớm muộn"Ân toán tình cừu giữa H và bà chủ công ty ở tầng hai chắc chắn có thể viết thành một bộ tiểu thuyết đấu đá thương trường.H không phải người thành phố này, cô ấy dựng nghiệp tất cả với hai bàn tay trắng. H là người rất có đầu óc kinh doanh, thương hiệu của cô ấy mau chóng trở thành nhất nhì trong thành phố.&nbsp;</p><p>Trong lúc cô ấy định mạnh tay mở rộng kinh doanh thì một thương hiệu đẳng cấp bỗng muốn cạnh tranh, đối phương cũng giống cô ấy, là một "nữ cường nhân".Chiến tranh giữa hai người phụ nữ không bao giờ có mùi thuốc súng nhưng lại là thứ tàn khốc nhất.Đầu tiên, đối phương chuyển trụ sở tới tầng dưới công ty của H, trang trí cực kì phô trương.&nbsp;</p><p>Cấp dưới của H ngày ngày nhìn họ làm vậy thì khá mất bình tĩnh, có người còn nói với H " Tổng giám đốc H, tôi nghĩ chúng ta nên làm một bảng hiệu nổi bật hơn rồi đặt ở một nơi thật bắt mắt, để đánh tan nhuệ khí của bọn họ."H bác bỏ đề nghị này, lý do đơn giản, làm một bảng hiệu nổi bật hơn thì có ích gì ?&nbsp;</p><p>Chỉ kích thích đối phương làm một bảng hiệu ngày càng nổi bật hơn mà thôi, có khi cuối cùng ở tầng một chỉ có bảng hiệu hai công ty này là nổi bật nhất, người tinh ý liếc qua là biết hai công ty đang so bì hạ bệ nhau. Bởi vậy không nhất thiết phải tỏ ra chi li hẹp hòi như thế.Một thời gian sau, đối phương trang hoàng xong, chính thức đi vào làm việc, trận chiến giữa hai công ty chính thức mở màn. Đầu tiên, đối phương tăng lương cho mọi nhân viên của họ, cao hơn lương công ty của H kha khá, hai công ty một ở tầng trên một ở tầng dưới, vốn chẳng giấu nổi nhau chuyện gì, huống chi đối phương còn chủ động để lộ cho phía H biết.</p>',
            'audio'=>'https://drive.google.com/file/d/14IawoclAGxaiNPbKKr5Nz50J1Zn5EHk_/view?usp=sharing'],
        ]);
    }
}

class User extends Seeder{
    public function run()
    {
        DB::table('users')->insert([
            ['email'=>'admin','password'=>'admin','name'=>'quanly','type'=>2,
            'avatar'=>'https://i1.wp.com/gocsuckhoe.com/wp-content/uploads/2020/09/avatar-facebook.jpg?w=632&ssl=1'],
            ['email'=>'admin1','password'=>'admin','name'=>'nhanvien1','type'=>1,
            'avatar'=>'https://i1.wp.com/gocsuckhoe.com/wp-content/uploads/2020/09/avatar-facebook.jpg?w=632&ssl=1'],
            ['email'=>'admin2','password'=>'admin','name'=>'nhanvien2','type'=>1,
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
        for ($i=1; $i <= 32; $i++) {
            DB::table('comment')->insert([
                ['novelID'=>$i,'accUsername'=>9,'content'=>'Mọi người chỉ em cách vào đọc được cả cuốn với. Cảm ơn ạ!'],
                ['novelID'=>$i,'accUsername'=>6,'content'=>'Cuốn sách cho bạn đọc mốc góc nhìn mới về những người thành công trong các lĩnh vực khác nhau.'],
                ['novelID'=>$i,'accUsername'=>8,'content'=>'Lâu quá ad ơi, 252 – 259 vẫn chưa thấy đâu :(('],
                ['novelID'=>$i,'accUsername'=>7,'content'=>'Tác phẩm thật sự đã mang đến cho mình một góc nhìn rất mới mẻ về thành công'],
                ['novelID'=>$i,'accUsername'=>5,'content'=>'Phải nói là quyển sách này đã cho mình một cái nhìn đầy đánh giá'],
                ['novelID'=>$i,'accUsername'=>4,'content'=>'Trời ơi cuốn này siêu hay luôn ý. Lâu lắm rồi tớ mới có cảm giác đọc sách mà gật đầu liên tục như đi quẩy vậy.'],
            ]);
        }
    }
}

class FollowList extends Seeder{
    public function run()
    {
        for ($i=1; $i <= 9; $i++) {
            DB::table('follow_list')->insert([
                ['accUsername'=>$i,'novelID'=>rand(1,10)],
                ['accUsername'=>$i,'novelID'=>rand(11,20)],
                ['accUsername'=>$i,'novelID'=>rand(21,32)],
            ]);
        }
    }
}

class AnotherTitle extends Seeder{
    public function run()
    {
        DB::table('another_title')->insert([
            ['novelID'=>1,'title'=>'The best doctor is yourself'],
            ['novelID'=>2,'title'=>'How Much Are You Expensive'],
            ['novelID'=>3,'title'=>'Life Is Your Choice'],
            ['novelID'=>4,'title'=>'Magical Perspective of Life'],
            ['novelID'=>5,'title'=>'Live To The Full For Today'],
            ['novelID'=>6,'title'=>'To Have Good Memory'],
            ['novelID'=>7,'title'=>'Business Model Creation'],
            ['novelID'=>8,'title'=>'New Confession Of An Economic Assassin'],
            ['novelID'=>9,'title'=>'The Giants In The Business World'],
            ['novelID'=>10,'title'=>'If I Know When I Have 20'],
            ['novelID'=>11,'title'=>'Outliers'],
            ['novelID'=>12,'title'=>'36 Design In Modern Business'],
            ['novelID'=>13,'title'=>'Think & Grow Rich'],
            ['novelID'=>14,'title'=>'Golden Rule Of Napoleon Hill'],
            ['novelID'=>15,'title'=>'Steeped Heart'],
            ['novelID'=>16,'title'=>'Disney Wars'],
            ['novelID'=>17,'title'=>'From Good To Great'],
            ['novelID'=>18,'title'=>'Ngày Đòi Nợ'],
            ['novelID'=>19,'title'=>'A to Z Marketing Insights'],
            ['novelID'=>20,'title'=>'Securities Investment And Trading Secrets'],
            ['novelID'=>21,'title'=>"It's never failed! All Challenges"],
            ['novelID'=>22,'title'=>'W. Buffett Investment Strategy'],
            ['novelID'=>23,'title'=>"Phan Thien An's Secret"],
            ['novelID'=>24,'title'=>'Great Lessons From Warren Buffett'],
            ['novelID'=>25,'title'=>'Successful Habits of Self-Made Millionaires'],
            ['novelID'=>26,'title'=>'The Way Of Warren Buffett'],
            ['novelID'=>27,'title'=>'Born To Be Steve Jobs'],
            ['novelID'=>28,'title'=>'Rehabilitation for the Disabled/Visual Impairment'],
            ['novelID'=>29,'title'=>'Looking Beautiful Is An Advantage, Living Beautiful Is A Skill'],
            ['novelID'=>30,'title'=>'Life is Short, Dont Cry, Be Happy'],
            ['novelID'=>31,'title'=>'The Life Story of Louis Braille'],
            ['novelID'=>32,'title'=>'Braille Teaching Method for Teens and Adults'],
        ]);
    }
}
