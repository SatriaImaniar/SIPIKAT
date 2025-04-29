<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPIKAT</title>

    <!-- Custom fonts for this template-->

    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- --Custom styles for this template--> --}}
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sb-admin/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIPIKAT </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Menu Admin -->
            <div class="sidebar-heading">Admin</div>

            <!-- Nav Item - Dashboard -->
            {{-- <li class="nav-item {{ $menuDashboard ?? '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> --}}
            <li class="nav-item {{ request()->routeIs('manajemenuser.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('manajemenuser.index') }}">
                    <i class="fas fa-user-shield"></i>
                    <span>Manajemen User</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('manajemenuser.index') }}">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Diklat</span>
                </a>
            </li> --}}
            <!-- Divider -->
            {{-- <hr class="sidebar-divider"> --}}

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Menu Admin
            </div> --}}

            <!-- Nav Item - Utilities -->
            {{-- <li class="nav-item {{ $menuAdminUser ?? '' }}">
                <a class="nav-link" href="{{ route('user') }}">
                    <i class="fas fa-user"></i>
                    <span>User</span></a>
            </li> --}}

            <!-- Data Master -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterData">
                    <i class="fas fa-database"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseMasterData" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelola Data:</h6>
                        <a class="collapse-item" href="{{ route('jabatan.index') }}"><i class="fas fa-briefcase"
                                aria-hidden="true"></i> Jabatan</a>
                        <a class="collapse-item" href="{{ route('unit-kerja.index') }}"><i class="fas fa-sitemap"></i>
                            UK & KD </a>
                    </div>
                </div>
            </li> --}}

            {{-- ASET  --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAset">
                    <i class="fas fa-boxes"></i> <!-- Ikon aset -->
                    <span>Aset</span>
                </a>
                <div id="collapseAset" class="collapse" aria-labelledby="headingAset" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- Submenu Kendaraan -->
                        <h6 class="collapse-header">Kendaraan Dinas</h6>
                        <a class="collapse-item" href="{{ route('kendaraan.mobil') }}">
                            <i class="fas fa-car"></i> Mobil
                        </a>
                        <a class="collapse-item" href="{{ route('kendaraan.motor') }}">
                            <i class="fas fa-motorcycle"></i> Motor
                        </a>

                        <!-- Submenu Barang -->
                        <h6 class="collapse-header mt-3">Barang Inventaris</h6>
                        <a class="collapse-item" href="{{ route('barang.laptop') }}">
                            <i class="fas fa-laptop"></i> Laptop
                        </a>
                        <a class="collapse-item" href="{{ route('barang.printer') }}">
                            <i class="fas fa-print"></i> Printer
                        </a>
                        <a class="collapse-item" href="{{ route('barang.pc') }}">
                            <i class="fas fa-desktop"></i> PC/Komputer
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fas fa-box-open"></i> Lainnya
                        </a>
                    </div>
                </div>
            </li>





            {{-- TMT --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTMT">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Manajemen TMT</span>
                </a>
                <div id="collapseTMT" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis TMT:</h6>
                        <a class="collapse-item" href="{{ route('tmt-pangkat.index') }}"><i
                                class="fas fa-arrow-up"></i> Kenaikan Pangkat
                        </a>
                        <a class="collapse-item" href="{{ route('tmt-berkala.index') }}"> <i
                                class="fas fa-chart-line mr-2" aria-hidden="true"></i>Kenaikan Berkala</a>
                        <a class="collapse-item" href="{{ route('tmt.pensiun.index') }}"> <i
                                class="fas fa-piggy-bank"></i> Pensiun</a>
                    </div>
                </div>
            </li>
            <!-- Menu User -->
            {{-- <div class="sidebar-heading">Pegawai</div> --}}


            <!-- Data PNS -->
{{-- 
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pns.index') }}">
                    <i class="fas fa-id-card"></i>
                    <span>My Data</span>
                </a>
            </li> --}}


            <!-- Diklat -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDiklat">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Diklat</span>
                </a>
                <div id="collapseDiklat" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pelatihan:</h6>
                        <a class="collapse-item" href="{{ route('diklat.jadwal') }}">Jadwal Diklat</a>
                        <a class="collapse-item" href="">Riwayat Diklat</a>
                    </div>
                </div>
            </li>

            <!-- Berkas Kenaikan Pangkat-->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBerkas">
                    <i class="fas fa-folder-open"></i>
                    <span>Berkas KP</span>
                </a>
                <div id="collapseBerkas" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pelatihan:</h6>
                        <a class="collapse-item" href="">Jadwal Struktual</a>
                        <a class="collapse-item" href="">Penyesuaian Ijazah</a>
                        <a class="collapse-item" href="">Jabatan Fungsional</a>
                        <a class="collapse-item" href="">Reguler</a>
                    </div>
                </div>
            </li> --}}






            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                Alerts</a>
                        </div>
                        </li>

                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="'enno/assets/img/foto.webp'" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                Messages</a>
                        </div>
                        </li>

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ optional(Auth::user())->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('enno/assets/img/fijikaze.jpg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class=" dropdown-item disabled text-success ">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-success-400 "></i>
                                    Pegawai
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>



                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            {{-- Copyright &copy; Your Website 2020 --}}
                            Copyright PKL Imaniar Website 2025
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" id="logout" method="POST">

                        <a role="button" class="btn btn-primary"
                            onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- SB Admin 2 Core JS -->
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>

    <!-- DataTables JS -->
    <script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable dengan responsif
            $('#dataTable').DataTable({
                responsive: true,
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 0
                    }, // Prioritas kolom responsif
                    {
                        responsivePriority: 2,
                        targets: -1
                    }
                ]
            });

            // Handler untuk menu navigasi
            $('.nav-link').click(function() {
                var target = $(this).data('target');
                $('.collapse').not(target).collapse('hide');
            });
        });
    </script>
</body>

</html>



<!-- Nav Item - Utilities -->
{{-- <li class="nav-item {{ $menuAdminTugas ?? '' }}">
                <a class="nav-link" href="{{ route('tugas') }}">
                    <i class="fas fa-tasks"></i>
                    <span>Tugas</span></a>
            </li> --}}

{{-- <li class="nav-item"> 
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatauser"
                    aria-expanded="true" aria-controls="collapseDatauser">
                    <i class=""></i>
                    <span>Data User</span>
                </a>
                <div id="collapseDatauser" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Anggota PNS:</h6>
                        <a class="collapse-item" href="utilities-color.html">TMT PNS </a>
                        <a class="collapse-item" href="utilities-border.html">TMT Kenaikan Berkala</a>
                        <a class="collapse-item" href="utilities-animation.html">TMT kenaikan Pangkat</a>
                         <a class="collapse-item" href="utilities-other.html">Other</a> 
                    </div>
                </div>
            </li> --}}

<!-- Divider -->
{{-- <hr class="sidebar-divider"> --}}
<!-- Heading -->
{{-- <div class="sidebar-heading">
                Menu User
            </div> --}}

<!-- Nav Item - Utilities Collapse Menu -->
{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseDaftarNamaPNS" aria-expanded="true" aria-controls="collapseDaftarNamaPNS">
                    <i class=""></i>
                    <span>Data Anggota PNS</span>
                </a>
                <div id="collapseDaftarNamaPNS" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manajemen PNS:</h6>
                        <a class="collapse-item" href="utilities-color.html">TMT Kenaikan Pangkat</a>
                        <a class="collapse-item" href="utilities-border.html">TMT Kenaikan Berkala</a>
                    </div>
                </div>
            </li> --}}

{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseNamaJabatan" aria-expanded="true" aria-controls="collapseNamaJabatan">
                    <i class=""></i>
                    <span>Data Kepala Dinas</span>
                </a>
                <div id="collapseNamaJabatan" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manajemen Kepala Dinas:</h6>
                        {{-- <a class="collapse-item" href="utilities-color.html">Tmt Kenaikan Pangkat</a> --}}
{{-- <a class="collapse-item" href="utilities-border.html">Tambah Data </a>
                        <a class="collapse-item" href="utilities-animation.html">Daftar Jabatan</a> --}}
{{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
{{-- <a class="collapse-item" href="utilities-border.html">TMT Kenaikan Berkala</a>
                        <a class="collapse-item" href="utilities-animation.html">TMT Kenaikan Per PNS</a> --}}
{{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
{{-- </div>
                </div>
            </li>  --}}


{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseinputdatakepaladinas" aria-expanded="true"
                    aria-controls="collapseinputdatakepaladinas">
                    <i class="fas fa-user-tie"></i>
                    <span>Data Kepala Dinas</span>
                </a>
                <div id="collapseinputdatakepaladinas" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Data kepala dinas:</h6>
                        <a class="collapse-item" href="utilities-color.html">TMT Kenaikan Pangkat</a>
                        <a class="collapse-item" href="utilities-border.html">TMT Kenaikan PNS</a>
                        <a class="collapse-item" href="utilities-animation.html">TMT Kenaikan Berkala</a>
                        {{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </li> --}}

{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDiklat"
                    aria-expanded="true" aria-controls="collapseDiklat">
                    <i class=""></i>
                    <span>Diklat</span>
                </a>
                <div id="collapseDiklat" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Diklat:</h6>
                        <a class="collapse-item" href="utilities-color.html">TMT Berangkat Diklat</a>
                        <a class="collapse-item" href="utilities-border.html">TMT selesai Diklat</a>
                        <a class="collapse-item" href="utilities-animation.html">Hasil Diklat</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasetmobil"
                    aria-expanded="true" aria-controls="collapseasetmobil">
                    <i class=""></i>
                    <span>Aset </span>
                </a>
                <div id="collapseasetmobil" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Aset</h6>

                        <!-- Kategori Mobil & Motor -->
                        <h6 class="collapse-header">Kendaraan</h6>
                        <a class="collapse-item" href=" {{ route('kendaraan.mobil') }}">Mobil</a>
                        {{-- {{ route('kendaraan.motor') }} --}}
{{-- <a class="collapse-item" href=" {{ route('kendaraan.motor') }}">Motor</a> --}}

<!-- BARANG -->
{{-- <h6 class="collapse-header mt-3">Barang</h6> --}}
{{-- {{ route('barang.laptop') }} --}}
{{-- <a class="collapse-item" href="#">Laptop</a> --}}
{{-- {{ route('barang.printer') }} --}}
{{-- <a class="collapse-item" href="#">Printer</a> --}}
{{-- {{ route('barang.pc') }} --}}
{{-- <a class="collapse-item" href="#">PC</a>
                        <a class="collapse-item" href="aset/other">Other</a>
                    </div>
                </div> --}}
{{-- </li> --}}
{{-- <li class="nav-item"> --}}
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAset">
                    <i class="fas fa-car"></i>
                    <span>Aset</span>
                </a>
                <div id="collapseAset" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kendaraan:</h6>
                        <a class="collapse-item" href="{{ route('kendaraan.mobil') }}">Mobil</a>
                        <a class="collapse-item" href="{{ route('kendaraan.motor') }}">Motor</a>
                        <h6 class="collapse-header mt-3">Barang:</h6>
                        <a class="collapse-item" href="">Laptop</a>
                        <a class="collapse-item" href="">Printer</a>
                    </div>
                </div> --}}
{{-- </li> --}}

<!-- Nav Item - Pages Collapse Menu -->
{{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> --}}

<!-- Divider -->
{{-- <hr class="sidebar-divider"> --}}

<!-- Heading -->
{{-- <div class="sidebar-heading">
                Addons
            </div> --}}

<!-- Nav Item - Pages Collapse Menu -->
{{-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> --}}

<!-- Nav Item - Charts -->
{{-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> --}}

<!-- Nav Item - Tables -->
{{-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}
