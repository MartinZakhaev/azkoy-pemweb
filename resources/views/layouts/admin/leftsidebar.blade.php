<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap ml-3"><h4>PERSONAL</h4></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Kategori <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/kategori/create') }}">Tambah Kategori </a></li>
                        <li><a href="{{ url('admin/kategori') }}">Daftar Kategori </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Suku Cadang <span class="badge badge-pill badge-cyan ml-auto">1</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/suku-cadang/create') }}">Tambah Suku Cadang </a></li>
                        <li><a href="{{ url('admin/suku-cadang') }}">Daftar Suku Cadang </a></li>
                    </ul>
                </li>
               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->