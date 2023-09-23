<!doctype html>
<html lang="en" data-layout="semibox" data-topbar="light" data-preloader="disable" data-bs-theme="light" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default" data-sidebar-visibility="show" data-sidebar="dark" data-sidebar-image="img-2" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>Admin CASN 2023 - Kementerian Agama RI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin CASN Kementerian Agama RI TA 2023" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.ico">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- Layout config Js -->
    <script src="<?= base_url()?>assets/js/layout.js?v=2"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css?v=2" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url()?>assets/css/icons.min.css?v=2" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url()?>assets/css/app.min.css?v=2" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url()?>assets/css/custom.min.css?v=2" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="https://kemenag.go.id/assets/imgs/theme/logo.png" alt="" height="40">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url()?>assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= site_url()?>">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Beranda</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= site_url('pengumuman')?>">
                                <i class="ri-todo-line"></i> <span data-key="t-widgets">Pengumuman</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-todo-line"></i> <span data-key="t-landing">Formasi</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarLanding" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= site_url('formasi/cpns')?>" class="nav-link" data-key="t-one-page">CPNS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('formasi/cpppkteknis')?>" class="nav-link" data-key="t-nft-landing">CPPPK Teknis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('formasi/cpppknakes')?>" class="nav-link" data-key="t-job">CPPPK Tenaga Kesehatan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="https://sscasn.bkn.go.id/dasarhukum" target="_blank">
                                <i class="ri-todo-line"></i> <span data-key="t-widgets">Regulasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
          <?= $this->renderSection('content') ?>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2023 © CASN Kemenag.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Biro Kepegawaian Kementerian Agama RI
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="<?= base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js?v=2"></script>
    <script src="<?= base_url()?>assets/libs/simplebar/simplebar.min.js?v=2"></script>
    <script src="<?= base_url()?>assets/libs/node-waves/waves.min.js?v=2"></script>
    <script src="<?= base_url()?>assets/libs/feather-icons/feather.min.js?v=2"></script>
    <script src="<?= base_url()?>assets/js/pages/plugins/lord-icon-2.1.0.js?v=2"></script>
    <script src="<?= base_url()?>assets/js/plugins.js?v=2"></script>

    <!-- App js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?= base_url()?>assets/js/app.js?v=2"></script>
    <script type="text/javascript">
        $('.datatable').DataTable({
                      dom:"Bfrtip",
                      buttons:["copy","excel","print","pageLength"],
                      lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, 'Semua'],
                      ],
        });

      function alert($text) {
        Toastify({
          text: $text,
          duration: 5000,
          newWindow: true,
          close: true,
          gravity: "top", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
          onClick: function(){} // Callback after click
        }).showToast();
      }

      <?php
      if(session()->getFlashdata('message')){
        ?>
        alert("<?= session()->getFlashdata('message')?>");
        <?php
      }
      ?>
    </script>
    <?= $this->renderSection('script') ?>
</body>

</html>
