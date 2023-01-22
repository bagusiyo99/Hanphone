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


                    <li class="nav-item">
                        <a href="/admin/blog" class="nav-link  {{ Request::is('admin/blog*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Handphone
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/blog" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Samsung</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/informasi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Asus </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Xiomi </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vivo </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Oppo </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Infinix </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Iphone </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lainnya </p>
                                </a>
                            </li>




                            <li class="nav-item">
                                <a href="/admin/blog"
                                    class="nav-link  {{ Request::is('admin/blog*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Aksesoris
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/blog" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Samsung</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/informasi" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Asus </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Xiomi </p>
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Vivo </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Oppo </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Infinix </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Iphone </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/admin/kategori" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lainnya </p>
                                        </a>
                                    </li>

        </div>
        <!-- /.sidebar -->
    </aside>
