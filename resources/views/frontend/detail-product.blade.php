@extends('frontend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul id="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li class="active"><a href="#">Cá ngừ đại dương nguyên con</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-ads-homepage align-center">click ngay để trải nghiệm dịch vụ miễn phí của Cadosa</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Nông sản tươi sống</a></li>
                    <li class="no-active"><a href="">Thịt tươi sống</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Nông sản tươi sống</a></li>
                    <li class="no-active"><a href="">Thịt tươi sống</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Nông sản tươi sống</a></li>
                    <li class="no-active"><a href="">Thịt tươi sống</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Nông sản tươi sống</a></li>
                    <li class="no-active"><a href="">Thịt tươi sống</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                    <li class="no-active"><a href="">Nông sản chế biến</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear-fix mg-bot-20"></div>
    <div class="row">
        <div class="col-md-7">
            <div class="post medium-post technology">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/article_slide.jpg') }}" alt="featured post cover">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <ul class="info-product clean-list">
                <li class="post-title">Cá ngừ đại dương nguyên con</li>
                <li>Giá bán: <span class="price large-price">20.000</span><i>đ/kg</i> - <i>Còn hàng</i></li>
                <li>Mã sản phẩm: COO12</li>
                <li>
                    <div class="slider-detail-product">
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-6.jpg') }}">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-6.jpg') }}">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-6.jpg') }}">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-5.jpg') }}">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-5.jpg') }}">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('image/products/simple-post-5.jpg') }}">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear-fix mg-bot-20"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="info-detail-product">
                <ul class="clean-list">
                    <li>
                        <h3 class="post-title">Thông tin sản phẩm</h3>
                        <div class="post-body">
                            <p>Cá ngừ nguyên con được vận chuyển về tại cửa hàng và bán buôn bán lẻ tại Sói Biển. Đây là loại hải sản khá đặc biệt do vậy khách hàng thường là nhà hàng, khách sạn hoặc bếp ăn tập thể có nhu cầu mua cả con sẽ đặt hàng trước Sói Biển khoảng 3 ngày để có cá tươi ngon nhất.</p>
                        </div>
                    </li>
                    <li class="align-right">
                        <button class="btn-buy-prod">Mua hàng</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear-fix mg-bot-10"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="info-detail-product">
                <h3 class="post-title">Sản phẩm tương tự</h3>
            </div>
        </div>
    </div>
    <div class="clear-fix mg-bot-10"></div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-1.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-1.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-1.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-2.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-2.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/products/simple-post-2.jpg') }}">
                    </a>
                </div>

                <div class="post-body align-center">
                    <h4 class="post-title no-margin"><a href="{{ route('detail-product') }}">Rau muống</a></h4>

                    <p class="post-excerpt">Giá bán: <span class="price">20.000 đ/kg</span> - <i>Còn hàng</i></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="post-simple box-help">
                <h4 class="align-center title">Hướng dẫn mua hàng</h4>
                <div class="post-body">
                    <p>- Hàng ngày lúc 7h đến 8h sáng về: Lợn sạch, Lợn mán Hòa Bình  |  Thịt gà, vịt sạch Hòa Bình  |  Rau hữu cơ, rau bản địa Dì Thàng, Lào Cai  | Rau quả VietGAP |  Các loại hoa quả Việt Nam  |  Hoa quả nhập khẩu.</p>
                    <p>- 12h hàng ngày sẽ về : Cá hồi tươi được nhập khẩu từ NAUY và Sói Biển chỉ bán loại 1 có trọng lượng 6 kg trở lên.</p>
                    <p>- 10 sáng thứ 7 và chủ nhật hàng tuần : Sói Biển sẽ về rất nhiều hải sản như tôm sú, tôm gân, cá thu, cá chìa vôi, cá hố, cá chim, cá cơm, mực lá, mực trứng, mực ống...Đặc biệt vào thứ 7 và chủ nhật sẽ thường xuyên tổ chức chương trình giới thiệu sản phẩm nông nghiệp tiêu biểu trên toàn hệ thống.</p>
                    <p>- Thứ 7 và chủ nhật : Sói Biển sẽ tổ chức giã chả mực Hạ Long trực tiếp tại cửa hàng thu hút đông đảo khách hàng tại Hà Nội đến thăm quan mua thực phẩm sạch và chả mực.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Công nghệ sản xuất</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="nav-category">
                <ul>
                    <li><a href="">Tư vấn dinh dưỡng</a></li>
                    <li><a href="">Thực đơn hôm nay</a></li>
                    <li><a href="">Dược liệu tự nhiên</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="post simple-post">
                <div class="post-cover">
                    <a href="{{ route('detail-product') }}">
                        <img src="{{ asset('image/articles/simple-post-3.jpg') }}">
                    </a>
                </div>

                <div class="post-body">
                    <h4 class="post-title"><a href="{{ route('detail-product') }}">15 CÁCH GIẢM BÉO ĐƠN GIẢN KO ẢNH HƯỞNG SỨC KHỎE</a></h4>

                    <p class="post-excerpt">Thủ tướng Ấn Độ Narendra Modi bắt đầu chuyến thăm chính thức đầu tiên tới Việt Nam sáng nay, đánh dấu một bước tiến mới trong quan hệ hai nước.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider-detail-product').bxSlider({
                slideWidth: 210,
                minSlides: 3,
                maxSlides: 3,
                slideMargin: 15,
                pager: false
            });
        });
    </script>
@stop
