    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin/dasboard"
                            class="nav-link    {{ Request::is('admin/dasboard*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                {{-- <span class="right badge badge-danger">New</span> --}}
                            </p>
                        </a>
                    </li>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/admin/about"
                                    class="nav-link  {{ Request::is('admin/about*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-calendar"></i>
                                    <p>
                                        About
                                        {{-- <span class="right badge badge-danger">New</span> --}}
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/admin/promo"
                                    class="nav-link  {{ Request::is('admin/promo*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-calendar"></i>
                                    <p>
                                        Promo
                                        {{-- <span class="right badge badge-danger">New</span> --}}
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>


                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="#" class="nav-link  {{ Request::is('admin/blog*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Handphone
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/samsung" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Samsung</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/asus" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Asus </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/xiomi" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Xiomi </p>
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="/admin/vivo" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Vivo </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/oppo" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Oppo </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/infinix" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Infinix </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/iphone" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Iphone </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/hplain" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lainnya </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </nav>


                    <li class="nav-item">
                        <a href="#" class="nav-link  {{ Request::is('admin/blog*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Accessories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/charger" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Charger</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/casing" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Casing </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/pb" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Power Bank </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/admin/usb" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Usb </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/lainaksesoris" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lainnya </p>
                                </a>
                            </li>
                        </ul>
                    </li>











        </div>
        <!-- /.sidebar -->
    </aside>
