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

        {{ Html::style(asset('css/app.css')) }}
        {{ Html::style(asset('vendor/adminlte/') . "/bootstrap/css/bootstrap.min.css") }}
        {{ Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}

        @yield('after-styles')

    </head>
    <body id="front-page">
        <div id="page">
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <!-- Search Panel -->
                <div class="search-panel">
                    <span class="search-panel-close">Close</span>
                    <div class="container-fluid">
                        <form class="main-search-form">
                            <div class="input-line">
                                <input type="text" class="search-input" placeholder="Search">
                                <button class="search-submit"><i class="icon-magnifier"></i></button>
                            </div>

                            <ul id="search-results" class="clean-list"></ul>
                        </form>
                    </div>
                </div>

                <!-- Header -->
                <header>
                    <div class="main-header-wrapper">
                        <!-- Main Header content -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <a class="site-identity" href="http://teslathemes.com/demo/html/dailypost/index.html">
                                        <img src="./DailyPost_files/identity.png" alt="identity">
                                    </a>
                                </div>

                                <div class="col-md-8 col-lg-7">
                                    <div class="breaking-news">
                                        <span class="block-title">Breaking news</span>
                                        <p class="block-body marquee"><div style="width: 100000px; margin-left: 555px; animation: marqueeAnimation-2907359 24.5946s linear 1s infinite running;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 0px; float: left;">Involvement; free expression UNICEF campaign; life-expectancy inclusive capitalism; <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">outcomes asylum liberal</a> dedicated communities economic development organization.</div></div></p>
                                    </div>

                                    <nav class="main-nav align-center">
                                        <ul class="clean-list">
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">News</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">Politic</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">Sport</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">Economic</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">People</a></li>
                                            <li><a href="http://teslathemes.com/demo/html/dailypost/#">Tech</a></li>
                                        </ul>
                                        <span class="search-panel-toggle no-select">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </nav>
                                </div>

                                <div class="col-md-2 col-lg-3">
                                    <div class="main-social-block">
                                        <ul class="social-platforms clean-list">
                                            <li class="platform align-center">
                                                <span class="title">Twitter</span>
                                                <a href="https://twitter.com/teslathemes" target="_blank" class="twitter">
                                                    <span class="counter">263</span>
                                                </a>
                                            </li>

                                            <li class="platform align-center">
                                                <span class="title">Facebook</span>
                                                <a href="https://www.facebook.com/TeslaThemes" target="_blank" class="facebook">
                                                    <span class="counter">597</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Main Content -->
                <div class="content-wrapper">
                    <!-- Simple container -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Featured Post -->
                                <div class="post featured-post big-featured-post">
                                    <h1 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Inside the Digital Effort to Trace the Descendants of Freed Slaves</a></h1>

                                    <div class="post-cover">
                                        <ul class="post-categories clean-list">
                                            <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Community</a></li>
                                        </ul>

                                        <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                            <img src="./DailyPost_files/featured-post-bg-2.jpg" alt="featured post cover">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="post featured-post small-featured-post">
                                            <div class="post-meta">
                                                <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">The top 10 coolest new cities on the planet</a></h3>

                                                <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html" class="author">Tony Martin</a></p>
                                            </div>

                                            <div class="post-cover">
                                                <ul class="post-categories clean-list">
                                                    <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Architecture</a></li>
                                                </ul>

                                                <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                    <img src="./DailyPost_files/small-featured-post-bg-1.jpg" alt="featured post cover">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <div class="post featured-post small-featured-post">
                                            <div class="post-meta">
                                                <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">The Great Wall of China is falling apart</a></h3>

                                                <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html" class="author">Tony Martin</a></p>
                                            </div>

                                            <div class="post-cover">
                                                <ul class="post-categories clean-list">
                                                    <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Community</a></li>
                                                </ul>

                                                <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                    <img src="./DailyPost_files/small-featured-post-bg-2.jpg" alt="featured post cover">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple container -->
                    <div class="container-fluid flex-container ltr">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <!-- Weather Block -->
                                <div class="main-weather-block weather-block" data-weather-type="daily">
                                    <div class="block-header">
                                        <div class="location">
                                            <span class="current-location-weather-type">
                                                <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="cloudFillClip">
              <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-cloud">
              <g class="climacon_componentWrap climacon_componentWrap_cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
              </g>
            </g>
        </svg></i>
                                            </span>
                                            <p class="location-wrapper"><span data-weather-degrees="" class="degrees">17</span><span class="loc">Hanoi, VN</span></p>
                                        </div>

                                        <div class="weather-block-settings">
                                            <span class="settings-toggle"><i class="icon-weather-gear"></i></span>
                                            <div class="measurements-wrapper">
                                                <div class="measurements">
                                                    <span class="title">Measurements:</span>
                                                    <div class="select-group" data-current-unit="celsius">
                                                        <label class="select-option">
                                                            <input type="radio" name="measurements-selection" checked="checked" data-unit-type="metric">
                                                            <span class="label">C°</span>
                                                        </label>

                                                        <label class="select-option">
                                                            <input type="radio" name="measurements-selection" data-unit-type="imperial">
                                                            <span class="label">F°</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block-body">
                                        <div class="loading-box">
                                            <div class="box-wrapper">
                                                <span>Working on that..</span>
                                            </div>
                                        </div>
                                        <div class="today-info-block">
                                            <ul class="clean-list today-temperature">
                                                <li class="align-center" data-half-type="day">
                                                    <i class="icon icon-sun4"></i>
                                                    <span data-weather-degrees="" class="degrees">19</span>
                                                    <span class="title">day</span>
                                                </li>

                                                <li class="align-center" data-half-type="night">
                                                    <i class="icon icon-moon162"></i>
                                                    <span data-weather-degrees="" class="degrees">19</span>
                                                    <span class="title">night</span>
                                                </li>
                                            </ul>

                                            <div class="today-meta">
                                                <p class="day"><span>Wednesday</span>, Today</p>

                                                <ul class="clean-list sun-activity">
                                                    <li data-sun-activity="sunrise">06:16</li>
                                                    <li data-sun-activity="sunset">17:14</li>
                                                </ul>

                                                <ul class="clean-list short-meta">
                                                    <li data-short-meta="humidity">Humidity: <span class="result"> 69%</span></li>
                                                    <li data-short-meta="visibility">Visibility: <span class="result"> —</span></li>
                                                    <li data-short-meta="presure">Pressure: <span class="result"> 1030.33 hPa</span></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="weekly-info-block">
                                            <div class="current-time-weather">
                                                <span class="day">Now</span>
                                                <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="cloudFillClip">
              <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-cloud">
              <g class="climacon_componentWrap climacon_componentWrap_cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
              </g>
            </g>
        </svg></i>
                                                <span data-weather-degrees="" class="degrees">17</span>
                                            </div>
                                            <ul class="clean-list week-temperatures slick-initialized slick-slider">











                                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 360px; transform: translate3d(0px, 0px, 0px);"><li class="slick-slide slick-current slick-active" tabindex="0" role="option" aria-describedby="slick-slide00" style="width: 60px;" data-slick-index="0" aria-hidden="false">
                                                    <span class="day">Thu</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="sunFillClip">
              <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-sun">
              <g class="climacon_componentWrap climacon_componentWrap-sun">
                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"></path>
                </g>
                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"></circle>
                </g>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">24</span>
                                                </li><li class="slick-slide slick-active" tabindex="0" role="option" aria-describedby="slick-slide01" style="width: 60px;" data-slick-index="1" aria-hidden="false">
                                                    <span class="day">Fri</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="cloudFillClip">
              <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
            </clippath>
            <clippath id="sunCloudFillClip">
              <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
              <g clip-path="url(#cloudFillClip)">
                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                  <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                  </g>
                  <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                  </g>
                </g>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">24</span>
                                                </li><li class="slick-slide slick-active" tabindex="0" role="option" aria-describedby="slick-slide02" style="width: 60px;" data-slick-index="2" aria-hidden="false">
                                                    <span class="day">Sat</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="cloudFillClip">
              <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
            </clippath>
            <clippath id="sunCloudFillClip">
              <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
              <g clip-path="url(#cloudFillClip)">
                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                  <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                  </g>
                  <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                  </g>
                </g>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"></path>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">25</span>
                                                </li><li class="slick-slide slick-active" tabindex="0" role="option" aria-describedby="slick-slide03" style="width: 60px;" data-slick-index="3" aria-hidden="false">
                                                    <span class="day">Sun</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="sunCloudFillClip">
              <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
            </clippath>
            <clippath id="cloudSunFillClip">
              <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunAlt">
              <g clip-path="url(#cloudSunFillClip)">
                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                  <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                  </g>
                  <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                  </g>
                </g>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">19</span>
                                                </li><li class="slick-slide slick-active" tabindex="0" role="option" aria-describedby="slick-slide04" style="width: 60px;" data-slick-index="4" aria-hidden="false">
                                                    <span class="day">Mon</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="sunCloudFillClip">
              <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"></path>
            </clippath>
            <clippath id="cloudSunFillClip">
              <path d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunAlt">
              <g clip-path="url(#cloudSunFillClip)">
                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                  <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"></path>
                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"></path>
                  </g>
                  <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"></circle>
                  </g>
                </g>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
              </g>
              <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">19</span>
                                                </li><li class="slick-slide slick-active" tabindex="0" role="option" aria-describedby="slick-slide05" style="width: 60px;" data-slick-index="5" aria-hidden="false">
                                                    <span class="day">Tue</span>
                                                    <i class="icon" data-weather-icon=""><svg version="1.1" viewBox="15 15 70 70">
            <clippath id="sunFillClip">
              <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"></path>
            </clippath>
            <g class="climacon_iconWrap climacon_iconWrap-sun">
              <g class="climacon_componentWrap climacon_componentWrap-sun">
                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"></path>
                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"></path>
                </g>
                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"></circle>
                </g>
              </g>
            </g>
        </svg></i>
                                                    <span data-weather-degrees="" class="degrees">23</span>
                                                </li></div></div></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-7">
                                <!-- Latest Post -->
                                <div class="post latest-post">
                                    <div class="post-cover">
                                        <div class="post-meta">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">News</a></li>
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            </ul>

                                            <h2 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Airline Turns to a Source for Their Biofuel Upgrade</a></h2>

                                            <p class="post-excerpt">Off all the ways to travel, airplanes tend to be the fastest and the safest - as well as the most wastefull. <span class="post-author">by <a class="author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Allan Turning</a></span></p>
                                        </div>

                                        <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                            <img class="base" src="./DailyPost_files/latest-post-bg.jpg" alt="latest post bg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Posts -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post medium-post technology">
                                    <div class="post-cover">
                                        <ul class="post-categories clean-list">
                                            <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Technology</a></li>
                                        </ul>

                                        <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                            <img src="./DailyPost_files/blog-post-1.jpg" alt="featured post cover">
                                        </a>
                                    </div>

                                    <div class="post-body">
                                        <h2 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Could Technology Hold the Key to Treating Deadly Diseases?</a></h2>

                                        <p class="post-excerpt">The revolutionary rubbers are designed to help wearers make informed sexual decisions within the privacy of their home. The easy-to-operate machines mean impoverished Kenyans will no longer be stuck buying water from price-gouging vendors.</p>

                                        <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Alan Turing</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="post medium-post sports">
                                    <div class="post-cover">
                                        <ul class="post-categories clean-list">
                                            <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Sport</a></li>
                                        </ul>

                                        <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                            <img src="./DailyPost_files/blog-post-2.jpg" alt="featured post cover">
                                        </a>
                                    </div>

                                    <div class="post-body">
                                        <h2 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Top Polish football team Slansk trains with blind players</a></h2>

                                        <p class="post-excerpt">The revolutionary rubbers are designed to help wearers make informed sexual decisions within the privacy of their home. The easy-to-operate machines mean impoverished Kenyans will no longer be stuck buying water from price-gouging vendors.</p>

                                        <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Alan Turing</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Subscribe -->
                    <div class="newsletter-subscribe-block">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-lg-10 col-lg-offset-1">
                                    <h4 class="newsletter-message">Start your day with latest news.</h4>

                                    <form class="subscribe-form">
                                        <input type="text" class="form-input check-value" placeholder="E-mail address">
                                        <input type="submit" class="form-submit" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Blog Posts -->
                    <section class="blog-posts">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-1.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">How dream hampton Found Inspiration in a Beloved Trans-Woman Tragic Story</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Mark Newman</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Country</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-2.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Initiative, research catalyst safety, climate change and making progress</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Ashley Harrison</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-3.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html"> Support small-scale farmers meaningful work transformative recognition</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Rick Grimees</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-4.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Developing nations amplify, affordable health care and equality</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Walter Black</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post video-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Technology</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-5.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html"> New approaches, youth criteria policy dialogue mobilize democracy country</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Robert Slynt</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="post simple-post">
                                        <div class="post-cover">
                                            <ul class="post-categories clean-list">
                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                            </ul>

                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                <img src="./DailyPost_files/simple-post-6.jpg" alt="simple post cover">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <h4 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Innovation citizenry Action Against Hunger development non-partisan</a></h4>

                                            <p class="post-excerpt">The acclaimed filmmaker shares what makes her latest project so uniquely personal.</p>

                                            <p class="post-author">by <a href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Kate Fox</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- List Posts Section -->
                    <section class="list-posts-section">
                        <ul class="clean-list list-posts">
                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Two Poets Trade Places and Races for an Incredible Performance</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Lifestyle</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Julia Watson</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-1.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">What the abandoned venues from the 2004 Athens Olympics look like now</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Sport</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Tim Brown</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-2.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">27 of the coolest new buildings on the planet</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Architecture</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Joseph Majka</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-3.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">The F-35 can't outmaneuver a plane it is meant to replace</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Design</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Quinn Larssen</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-4.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">Two Poets Trade Places and Races for an Incredible Performance</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Lifestyle</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Julia Watson</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-5.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="post list-post">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="post-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="post-body">
                                                            <h3 class="post-title"><a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">FIFA Ballon D'or - FIFA World Player of the Year Nominees</a></h3>
                                                            <p class="post-excerpt">The World Architecture Festival held this year in Singapore won't name 2015's Building of the Year until November.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-meta">
                                                            <ul class="post-categories clean-list">
                                                                <li class="category"><a href="http://teslathemes.com/demo/html/dailypost/#">Sport</a></li>
                                                            </ul>

                                                            <a class="post-author" href="http://teslathemes.com/demo/html/dailypost/page-single-author.html">Tim Brown</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="post-cover">
                                                            <a href="http://teslathemes.com/demo/html/dailypost/page-single-story.html">
                                                                <img src="./DailyPost_files/list-post-6.jpg" alt="list post cover">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <!-- Pagination -->
                        <div class="container-fluid">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="http://teslathemes.com/demo/html/dailypost/#">2</a></li>
                                <li><a class="page-numbers" href="http://teslathemes.com/demo/html/dailypost/#">3</a></li>
                                <li><span class="page-numbers dots">...</span></li>
                                <li><a class="next page-numbers" href="http://teslathemes.com/demo/html/dailypost/#">Next</a></li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!-- Footer -->
                <footer>
                    <!-- Widgets Area -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                                <div class="widgets-area">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="widget widget-about">
                                                <a href="http://teslathemes.com/demo/html/dailypost/index.html">
                                                    <img src="./DailyPost_files/logo.png" alt="identity">
                                                </a>

                                                <p>DailyPost is a professional and responsive WordPress Theme best suitable for news, newspaper, magazine or review sites.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="widget widget-usefull-link">
                                                <h4 class="widget-title">Usefull links</h4>
                                                <ul>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Politics</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Business</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Culture</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Social</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">People</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Weather</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Economic</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Lifestyle</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Nature</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Sports</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Technology</a></li>
                                                    <li><a href="http://teslathemes.com/demo/html/dailypost/#">Music</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="social-section">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="social-block clean-list">
                                                <li>
                                                    <a href="https://twitter.com/teslathemes" target="_blank"><i class="fa fa-twitter"></i> twitter</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/TeslaThemes" target="_blank"><i class="fa fa-facebook"></i> facebook</a>
                                                </li>
                                                <li>
                                                    <a href="https://instagram.com/teslathemes/" target="_blank"><i class="fa fa-instagram"></i> instagram</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <form class="subscribe-form">
                                                <input type="text" class="form-input" placeholder="E-mail address">
                                                <input type="submit" class="form-submit" value="Subscribe">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copyrights -->
                    <div class="copyrights align-center">
                        <div class="container-fluid">
                            <p>© 2015 - DailyPost. Designed and Developed by <a href="https://www.teslathemes.com/" target="_blank">TeslaThemes</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>