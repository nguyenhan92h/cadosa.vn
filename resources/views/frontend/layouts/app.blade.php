<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
      {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
    </title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        {{ Html::style(asset('vendor/adminlte/') . "/bootstrap/css/bootstrap.min.css") }}
        {{ Html::style(asset('css/app.css')) }}

        @yield('after-styles')

    </head>
    <body>
        <div id="page">
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <!-- Header -->
                <header>
                    <div class="main-header-wrapper">
                        <!-- Main Header content -->
                        <div class="row">
                            <div class="col-md-2">
                                <a class="site-identity" href="{{ route('home') }}">
                                    {{ HTML::image(asset('image/config/logo_cadosa.jpg'), 'cadosa.vn') }}
                                </a>
                            </div>

                            <div class="col-md-10 head-right">
                                <div class="breaking-news">
                                    <p class="block-title">Công ty TNHH cánh đồng sạch c.a.d.o.s.a</p>
                                    <ul class="clean-list">
                                        <li>Địa chỉ: Số 21, ngõ 114, phố Hoàng Ngân, Cầu Giấy, Hà Nội</li>
                                        <li class="address-content">
                                            <ul>
                                                <li>Điện thoại: (04) 3558 3382</li>
                                                <li>Website: cadosa.vn</li>
                                            </ul>
                                            <ul>
                                                <li>Fax: (04) 3558 3382</li>
                                                <li>Email: contact@cadosa.com</li>
                                            </ul>
                                         </li>
                                    </ul>
                                </div>

                                <nav class="main-nav">
                                    <ul class="clean-list">
                                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Lịch nhập hàng</a></li>
                                        <li><a href="#">Công nghệ</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- banner header -->
                    <div class="banner-header">
                        <div class="row">
                            <div class="col-md-6">
                                {{ HTML::image(asset('image/config/banner_left.jpg'), 'banner left') }}
                            </div>
                            <div class="col-md-6">
                                {{ HTML::image(asset('image/config/banner_right.jpg'), 'banner right') }}
                            </div>
                        </div>
                    </div>
                </header>
                <hr>
                <!-- Main Content -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <footer>
                    <!-- Copyrights -->
                    <div class="copyrights">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 align-right">
                                    <a class="logo-footer" href="{{ route('home') }}">
                                        {{ HTML::image(asset('image/config/logo_cadosa.jpg'), 'cadosa.vn') }}
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="breaking-news align-left">
                                        <p class="block-title">Công ty TNHH cánh đồng sạch c.a.d.o.s.a</p>
                                        <ul class="clean-list">
                                            <li>Địa chỉ: Số 21, ngõ 114, phố Hoàng Ngân, Cầu Giấy, Hà Nội</li>
                                            <li class="address-content">
                                                <ul>
                                                    <li>Điện thoại: (04) 3558 3382</li>
                                                    <li>Website: cadosa.vn</li>
                                                </ul>
                                                <ul>
                                                    <li>Fax: (04) 3558 3382</li>
                                                    <li>Email: contact@cadosa.com</li>
                                                </ul>
                                             </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Scripts -->
                @yield('before-scripts')
                    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
                    <script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
                    {!! Html::script(asset('vendor/adminlte/bootstrap/js/bootstrap.min.js')) !!}
                    {!! Html::script(asset('js/plugins.js')) !!}
                @yield('after-scripts')
            </div>
        </div>
    </body>
</html>