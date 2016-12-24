@extends('frontend.layouts.app')

@section('content')
	<hr>
    <div class="row">
        <div class="col-md-12 mg-bot-20">
            <ul id="breadcrumb-technology" class="list-inline">
                <li><img src="http://cadosa.dev/image/background_menu.png"></li>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active"><a href="{{ route('contact-us') }}">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        	<h5 class="post-title color-title">Đăng ký trải nghiệm và liên hệ cadosa</h5>
        </div>
    </div>
    <div class="row">
    	<form action="#" method="POST">
			<div class="col-md-7">
				<label class="post-title color-green" style="font-size: 14px; left: 190px; position: absolute; top: 5px; background-color: #FFF;">Vui Lòng Điền Thông Tin</label>
				<div class="border-radius box-help border-contact-us mg-bot-20">
					<div class="form-horizontal">
						<div class="form-group">
					    	<label for="full_name" class="col-sm-3 control-label input-contact-us">HỌ VÀ TÊN:</label>
				    		<div class="col-sm-9">
					      		<input id="full_name" name="full_name" type="text" class="form-control" id="inputEmail3" placeholder="">
					    	</div>
					  	</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
					    	<label for="address" class="col-sm-3 control-label input-contact-us">ĐỊA CHỈ:</label>
				    		<div class="col-sm-9">
					      		<input id="address" name="address" type="text" class="form-control" id="inputEmail3" placeholder="">
					    	</div>
					  	</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
					    	<label for="phone_number" class="col-sm-3 control-label input-contact-us">SỐ ĐIỆN THOẠI:</label>
				    		<div class="col-sm-9">
					      		<input id="phone_number" name="phone_number" type="text" class="form-control" id="inputEmail3" placeholder="">
					    	</div>
					  	</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
					    	<label for="email" class="col-sm-3 control-label input-contact-us">EMAIL:</label>
				    		<div class="col-sm-9">
					      		<input id="email" name="email" type="email" class="form-control" id="inputEmail3" placeholder="">
					    	</div>
					  	</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
					    	<label for="content" class="col-sm-3 control-label input-contact-us">NỘI DUNG YÊU CẦU:</label>
				    		<div class="col-sm-9">
					      		<textarea id="content" name="content" class="form-control" rows="4"></textarea>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="post simple-post form-horizontal" style="padding: 15px 0 0 15px;">
					<div class="checkbox post-title form-group font-15 color-orange">
					    <label>
					      	<input type="checkbox">Đăng ký tư vấn sức khỏe qua email của cadosa
					    </label>
				  	</div>
				  	<div class="checkbox post-title form-group mg-bot-20 font-15 color-green">
					    <label>
					      	<input type="checkbox">Đăng ký nhận tư vấn dinh dưỡng qua email của cadosa
					    </label>
				  	</div>
				  	<div class="text-center form-group">
				  		<button class="btn btn-success background-green col-sm-3 col-sm-offset-2" style="border: 1px solid #99CA3C;">Gửi</button>
				  		<button class="btn btn-success background-green col-sm-3 col-sm-offset-1" style="border: 1px solid #99CA3C;">Xóa Hết</button>
				  	</div>
				  	<div class="form-group">
					    <label class="post-title col-sm-offset-2 font-15 color-green">Hotline hỗ trợ: 09333 56786</label>
				  	</div>
			  	</div>
			</div>
		</form>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="nav-category mg-bot-20">
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
			<div class="nav-category mg-bot-20">
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
@endsection

@section('after-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
@stop