<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>

    <meta charset="utf-8" />
    <title>404 Page Not Found | CASN Kemenag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Kepegawaian Kementerian Agama RI" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden p-0">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 text-center">
                        <div class="error-500 position-relative">
                            <img src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/error500.png" alt="" class="img-fluid error-500-img error-img" />
                            <h1 class="title text-muted">404</h1>
                        </div>
                        <div>
                            <h4>Page Not Found!</h4>
                            <p class="text-muted w-75 mx-auto">
                              <?php if (! empty($message) && $message !== '(null)') : ?>
                                  <?= nl2br(esc($message)) ?>
                              <?php else : ?>
                                  Sorry! Cannot seem to find the page you were looking for.
                              <?php endif ?>
                            </p>
                            <a href="/" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back to home</a>
                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
</body>
</html>
