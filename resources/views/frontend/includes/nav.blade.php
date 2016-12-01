<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <div class="col-xs-2">
                {{ HTML::image(asset('/img/logo_cadosa.png'), 'logo cadosa.vn', []) }}
            </div>
            <div class="col-xs-10">
                <label>CÔNG TY TNHH CÁNH ĐỒNG SẠCH - C.A.D.O.S.A</label>
                <ul>
                    <li>Địa chỉ: Số 21, ngõ 114, phố Hoàng Ngân, Cầu Giấy, Hà Nội</li>
                    <li>Điện thoại: (04) 3558 3382 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: (04) 3558 3382</li>
                    <li>Website: www.cadosa.vn &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: contact@cadosa.com</li>
                </ul>
                <div class="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>Home</li>
                        <li>Giới thiệu</li>
                        <li>Sản phẩm</li>
                        <li>Lịch nhập hàng</li>
                        <li>Công nghệ</li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
            {{-- {{ link_to_route('frontend.index', app_name(), [], ['class' => 'navbar-brand']) }} --}}
        </div><!--navbar-header-->
    </div><!--container-->
</nav>