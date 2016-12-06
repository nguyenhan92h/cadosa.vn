@extends('frontend.layouts.app')

@section('content')
	<hr>
    <div class="row">
        <div class="col-md-12">
            <ul id="breadcrumb-technology" class="list-inline">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active"><a href="{{ route('technology') }}">Công nghệ</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-ads-homepage align-center">click ngay để trải nghiệm dịch vụ miễn phí của Cadosa</h3>
        </div>
    </div>
    <div class="row">
    	{{-- <div class="col-md-12"> --}}
    		<div class="post simple-post">
    			<div class="col-md-12"><h5 class="post-title text-center"><a href="{{ route('detail-technology') }}">Công nghệ bảo quản hoa quả không hóa chất mới nhất cả cadosa</a></h5></div>
    			<div class="col-md-5 post-body">
					<p class="post-excerpt no-margin">Tồn tại vắt qua 3 thế kỷ, những cái tên như Đóng tàu Ba Son, Xi măng Hải Phòng, Dệt Nam Định... đã đi vào ký ức của nhiều thế hệ người Việt, song hầu hết đã đc chuyển đổi trong những năm gần đây.</p>
		    		<p class="post-excerpt no-margin">Huyền thoại nhà máy Dệt 'cứ trả lương là cả thành phố chao đảo'</p>
		    		<p class="post-excerpt no-margin">Nhà máy Đóng tàu Ba Son</p>
		    		<br>
		    		<p class="post-excerpt">Được người Pháp quyết định xây dựng từ năm 1863, sau khi xâm lược Việt Nam giữa thế kỷ XIX, Ba Son ban đầu là một xưởng sửa chữa, trú đậu cho chiến thuyền của quân đội thực dân và thương thuyền thời đó. Đến cuối thế kỷ này, Nhà máy Ba Son (Nay thuộc số 2 Tôn Đức Thắng, quận 1 TP HCM) được mở rộng thành một công trường lớn nhất Sài Gòn xưa. Đây là nơi sản xuất, sửa chữa mọi loại tàu thuyền, nơi đặt lò đúc của các hạng súng lớn nhỏ bằng đồng hay bằng gang, tập chung hàng nghìn công nhân với nhiều ngành chuyên môn khác nhau.</p>
		    		<br>
		    		<p class="post-excerpt">Buổi đầu, tham gia đóng, sửa tàu chỉ có những công nhân người Pháp hoặc người Hoa được thuê từ Macau, Hong Kong, Thượng Hải, Singapore. Nhân công người Việt chỉ được thuê chặt cây, dựng lán trại, đào kênh, đắp đường... Sau vài năm phát triển, Ba Son đã có những công nhân người Việt đầu tiên.</p>
		    		<br>
		    	</div>
				<div class="col-md-7 post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/All-Fruit-Wallpaper.jpg">
					</a>
				</div>
    		</div>
    		<div class="post simple-post">
				<div class="col-md-12">
					<p class="post-excerpt">Lịch sử hình thành và đấu tranh của giai cấp công nhân Việt Nam cũng gắn liền với xưởng Ba Son cùng tiếng tăm của một người thợ sau này trở thành Chủ tịch nước - ông Tôn Đức Thắng. Trải qua nhiều đợt chuyển giao sau các biến động lịch sử, sau này Tổng công ty Ba Son phát triển công nghệ đóng tàu hiện đại, có khả năng sản xuất, hạ thủy thành công những tàu tuần tra tìm kiếm cứu nạn xa bờ, có khả năng cứu nạn, có sàn đỗ cho trực thăng; đã đóng được những tàu tên lửa tấn công nhanh, tàu pháo hiện đại...</p>
					<br>
					<p class="post-excerpt">Năm 1993, Bộ Văn hóa thông tin (nay là Bộ Văn hóa - Thể thao và Du lịch) đã ra quyết định công nhận Ba Son là di tích lịch sử. Cuối năm 2008, khu đất được UBND TP HCM chấp thuận đề án xây dựng trung tâm phức hợp gồm tài chính văn phòng, thương mại dịch vụ, khách sạn cao cấp... Nhà máy đóng tàu Ba Son được xây dựng mới và di dời tới tỉnh Bà Rịa-Vũng Tàu.</p>
					<br>
					<p class="post-excerpt">Nhà máy Xi măng Hải Phòng</p>
					<br>
					<p class="post-excerpt">Nhà máy xi măng Hải Phòng cũ (khu đất hiện nằm trên phố Bạch Đằng, quận Hồng Bàng) ra đời năm 1899, là nhà máy xi măng đầu tiên và duy nhất tại khu vực Đông Dương dưới thời thuộc Pháp với 4 lò quay. Công ty Xi măng Poóclan nhân tạo Đông Dương khi đó độc quyền khai thác nguyên liệu tại khu núi đá vôi Tràng Kênh và đất sét tại bãi sông cửa Cấm rồi vận chuyển về nhà máy làm nguyên liệu chính để sản xuất xi măng. Khác với gạch đá, vôi, vữa... xi măng và bê tông là yếu tố hoàn toàn mới trong các loại vật liệu xây dựng tại Việt Nam lúc bấy giờ.</p>
					<br>
					<p class="post-excerpt">Với nhãn mác con Rồng Xanh, Rồng Đỏ, Xi măng Hải Phòng đã xuất hiện tại Hội trợ triển lãm Liege (Pháp) năm 1904 và hàng vạn tấn đã mặt trên thị trường tiêu thụ ở các nước Đông Dương, Java (Indonesia), Hoa Nam (Trung Quốc), Singapore...</p>
					<br>
					<p class="post-excerpt no-margin">nhung-nha-may-tram-tuoi-bi-do-bo-o-viet-nam-1</p>
					<p class="post-excerpt no-margin">Nhà máy xi măng Hải Phòng trong lịch sử. Ảnh tư liệu</p>
					<p class="post-excerpt no-margin">Những năm sau khi hòa bình lặp lại, lịch sử nhà máy cũng gắn liền với công cuộc xây dựng tại Việt Nam. Cùng các thay đổi để thích ứng với cơ chế thị trường sau năm 1986, Xi măng Hải Phòng là được sáp nhập với Công ty Kinh doanh xi măng Hải Phòng, trực thuộc Tổng công ty Công nghiệp Xi măng Việt Nam (Vicem)... Tuy nhiên, từ năm 1996 công ty phải đối mặt với rất nhiều khó khăn gay gắt và thách thức lớn về tình trạng thiết bị công nghệ lạc hậu, năng lực cạnh tranh trên thị trường yếu kém lại chịu sức ép rất mạnh về giải quyết ô nhiễm môi trường...</p>
					<br>
					<p class="post-excerpt no-margin">nhung-nha-may-tram-tuoi-bi-do-bo-o-viet-nam-2</p>
					<p class="post-excerpt no-margin">Ống khói - dấu tích của nhà máy Xi măng Hải Phòng. Ảnh: Panoramio</p>
					<p class="post-excerpt no-margin">Năm 2012, Nhà máy Xi măng Hải Phòng mới được khởi công trên mặt bằng của Xí nghiệp Đá Tràng Kênh (thị trấn Minh Đức, Thuỷ Nguyên, Hải Phòng). Tại nhà máy cũ, công ty chấm dứt hoàn toàn việc sản xuất xi măng sau 107 năm hoạt động. Mặt bằng này được quy hoạch xây dựng Dự án Khu đô thị Xi măng Hải Phòng với nhiều khu thương mại, khách sạn cao cấp, chung cư cao tầng, khu văn phòng cho thuê, khu biệt thự, khu vui chơi giải trí, trường học, bênh viện...</p>
					<br>
					<p class="post-excerpt">Nhà máy Dệt Nam Định</p>
					<br>
					<p class="post-excerpt no-margin">nhung-nha-may-tram-tuoi-bi-do-bo-o-viet-nam-3</p>
					<p class="post-excerpt no-margin">Toàn cảnh Nhà máy dệt Nam Định trước đây. Ảnh tư liệu</p>
					<p class="post-excerpt no-margin">Nhà máy Dệt Nam Định tiền thân là một cơ sở nghiên cứu về tơ lụa do Toàn quyền Đông Dương - De Lanessan sáng lập. Đến năm 1898, Toàn quyền Paul Doumer cho phép lập một nhà máy tơ chạy bằng hơi nước với 6 lò hơi đặt ngay tại trung tâm thành phố Nam Định.</p>
					<br>
					<p class="post-excerpt">Nhà máy dệt này trong một thời kỳ dài đã đưa Nam Định vào Top 3 thành phố công nghiệp lớn nhất miền Bắc. Có thời điểm đỉnh cao, nhà máy còn tạo công ăn việc làm cho tới gần 18.000 người. Trung bình cứ 10 người dân thành Nam thì có một người là công nhân của nhà máy dệt.</p>
					<br>
					<p class="post-excerpt">Thực tế, trong gần chục năm nay, nhà máy gặp khó khăn và hiệu quả kinh doanh đi xuống. Hiện chỉ còn khoảng 5.000 công nhân, cán bộ. Phần lớn đã bỏ nghề vì lương quá thấp. Với mức doanh thu trên dưới 800 tỷ đồng, 2 năm gần đây, công ty chỉ lãi 13-18 tỷ đồng. Trong khi đó, thu nhập bình quân tháng của nhân viên chỉ ở mức 3,4 triệu đồng.</p>
					<br>
					<p class="post-excerpt">Sau hơn trăm năm hoạt động với bề dày lịch sử, trải qua 2 cuộc chiến tranh, đến năm 2003, nhà máy được xác định là cơ sở gây ô nhiễm nghiêm trọng nên buộc phải di dời ra khỏi thành phố. Nhà máy Nhuộm - bộ phận gây ô nhiễm nhất - đã được di dời trước sang Khu công nghiệp Hòa Xá cách đó 5 km từ năm 2014. Đến nay, khâu phá dỡ cơ sở này mới gần hoàn tất. Sau khi di dời toàn bộ nhà máy Nhuộm và Dệt, nơi đây sẽ được bàn giao để xây khu đô thị với quy mô 24,8 ha, tổng mức đầu tư trên 410 tỷ đồng.</p>
					<br>
					<p class="post-excerpt no-margin">nhung-nha-may-tram-tuoi-bi-do-bo-o-viet-nam-4</p>
					<p class="post-excerpt no-margin">Việc di dời nhà máy để lại nhiều tiếc nuối cho người dân thành Nam. Ảnh: Trần Huấn</p>
					<p class="post-excerpt no-margin">Nhà máy Kẽm Quảng Yên</p>
					<br>
					<p class="post-excerpt">Công trình nhà máy kẽm tại thị xã Quảng Yên (Quảng Ninh) do người Pháp xây dựng vào khoảng những năm 1912-1913. Đây là cơ sở công nghiệp đầu tiên tại Quảng Ninh, khi đó Việt Nam cũng được coi là nơi có ngành công nghiệp kẽm quan trọng nhất Đông Nam Á. Có thời điểm, nhà máy đã sử dụng tới 700 công nhân và sự sa sút của nhà máy những năm đầu thập niên 30 của thế kỷ XX từng được lịch sử ghi lại là "khiến cả thị trấn Quảng Yên trở nên trống vắng". Từ đó đến nay, công trình hầu như không được sử dụng nhiều vào sản xuất.</p>
				</div>
    		</div>
    	{{-- </div> --}}
    </div>
    <div class="row">
		<div class="col-md-12">
			<div class="simple-post box-help">
				<h6 class="align-center title">Hướng dẫn mua hàng</h6>
				<div class="post-body">
					<p>- Hàng ngày lúc 7h đến 8h sáng về: Lợn sạch, Lợn mán Hòa Bình | Thịt gà, vịt sạch Hòa Bình | Rau hữu cơ, rau bản địa Dì Thàng, Lào Cai | Rau quả VietGAP | Các loại hoa quả Việt Nam | Hoa quả nhập khẩu.</p>
					<p>- 12h hàng ngày sẽ về : Cá hồi tươi được nhập khẩu từ NAUY và Sói Biển chỉ bán loại 1 có trọng lượng 6 kg trở lên.</p>
					<p>- 10 sáng thứ 7 và chủ nhật hàng tuần : Sói Biển sẽ về rất nhiều hải sản như tôm sú, tôm gân, cá thu, cá chìa vôi, cá hố, cá chim, cá cơm, mực lá, mực trứng, mực ống...Đặc biệt vào thứ 7 và chủ nhật sẽ thường xuyên tổ chức chương trình giới thiệu sản phẩm nông nghiệp tiêu biểu trên toàn hệ thống.</p>
					<p>- Thứ 7 và chủ nhật : Sói Biển sẽ tổ chức giã chả mực Hạ Long trực tiếp tại cửa hàng thu hút đông đảo khách hàng tại Hà Nội đến thăm quan mua thực phẩm sạch và chả mực.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="post simple-post post-interest">
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">Có thể bạn quan tâm</a>
					</h6>
					<ul class="list-unstyled">
						<li>Những 'tay chơi' mới trên thị trường bất động sản (11/7)</li>
						<li>Những việc nên làm ngay khi mất việc (30/5) 74</li>
						<li>Chủ đầu tư nhà máy giấy Trung Quốc cam kết không 'bức tử' sông Hậu (23/6) 74</li>
						<li>Huyền thoại nhà máy Dệt 'cứ trả lương là cả thành phố chao đảo' (14/7) 74</li>
						<li>ADB lạc quan về kinh tế Việt Nam (17/6)</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="nav-category margin-bottom-20">
				<ul>
					<li>
						<a href="">Công nghệ sản xuất</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="nav-category margin-bottom-20">
				<ul>
					<li>
						<a href="">Tư vấn dinh dưỡng</a>
					</li>
					<li>
						<a href="">Thực đơn hôm nay</a>
					</li>
					<li>
						<a href="">Dược liệu tự nhiên</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="post simple-post">
				<div class="post-cover">
					<a href="page-single-story.html">
						<img src="http://cadosa.dev/image/articles/simple-post-4.jpg">
					</a>
				</div>
				<div class="post-body">
					<h6 class="post-title">
						<a href="page-single-story.html">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a>
					</h6>
					<p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54d043744f8bfa02"></script>
@endsection

@section('after-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
@stop