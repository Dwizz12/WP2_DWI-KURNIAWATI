[18.17, 22/10/2021] Lupyyy: <!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>pustaka-booking | <?= $judul; ?></title>

 <!-- Custom fonts for this template-->
 <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="<?= base_url('assets/'); ?>datatable/datatables.css"
rel="stylesheet" type="text/css">
 <script type="text/javascript" src="<?= base_url('assets/');
?>datatable/jquery.dataTables.js'; ?>"></script>
 <script type="text/javascript" src="<?= base_url('assets/');
?>datatable/…
[18.19, 22/10/2021] Lupyyy: <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebardark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Looping Menu-->

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
                            <i class="fa fa-fw fa book"></i>
                            <span>Data Buku</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                            <i class="fa fa-fw fa book"></i>
                            <span>Data Anggota</span></a>
                    </li>
                </li>
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -- >