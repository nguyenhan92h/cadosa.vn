@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}">
                </img>
            </div>
            <div class="pull-left info">
                <p>
                    {{ Auth::user()->name }}
                </p>
                <a href="#">
                    <i class="fa fa-circle text-success">
                    </i>
                    Online
                </a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">
                {{ trans('backpack::base.administration') }}
            </li>
            <!-- ================================================ -->
            <!-- ==== Recommended place for admin menu items ==== -->
            <!-- ================================================ -->
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}">
                    <i class="fa fa-dashboard">
                    </i>
                    <span>
                        {{ trans('backpack::base.dashboard') }}
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/menu-item') }}">
                    <i class="fa fa-list">
                    </i>
                    <span>
                        Menu
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/category') }}">
                    <i class="fa fa-list-alt">
                    </i>
                    <span>
                        Thể loại
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o">
                    </i>
                    <span>
                        Tin tức
                    </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('admin/article') }}">
                            <i class="fa fa-newspaper-o">
                            </i>
                            <span>
                                Bài viết
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/tag') }}">
                            <i class="fa fa-tag">
                            </i>
                            <span>
                                Tags
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('admin/product') }}">
                    <i class="fa fa-pencil-square">
                    </i>
                    <span>
                        Sản phẩm
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/contact') }}">
                    <i class="fa fa-users"></i>
                    <span>
                        Contact
                    </span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ url('admin/banner') }}">
                    <i class="fa fa-image"></i>
                    <span>
                        Banner
                    </span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{ url('admin/page') }}">
                    <i class="fa fa-file-o">
                    </i>
                    <span>
                        Pages
                    </span>
                </a>
            </li> --}}
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}">
                    <i class="fa fa-cog">
                    </i>
                    <span>
                        Settings
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}">
                    <i class="fa fa-sign-out">
                    </i>
                    <span>
                        {{ trans('backpack::base.logout') }}
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endif
