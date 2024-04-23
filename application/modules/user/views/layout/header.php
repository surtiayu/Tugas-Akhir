<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="aptikom-kalbar">
    <meta name="author" content="aptikom">

    <title> <?= $title ?></title>
    <link href="<?php echo base_url(); ?>assets/image/logo_aptikom.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/image/logo_aptikom.png" rel="apple-touch-icon">
    <link href="<?php echo base_url() . 'assets/node_modules/morrisjs/morris.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/node_modules/toast-master/css/jquery.toast.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/style.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/pages/dashboard1.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/alertjs/sweetalert2.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist_home/css/pages/tab-page.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/node_modules/timeline/css/timeline.min.css' ?>">


</head>

<body class="skin-blue fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?= $title ?></p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <b>

                            <img src="<?php echo base_url() . '' ?>assets/image/logo_aptikom.png" alt="homepage" class="dark-logo" />

                            <img src="<?php echo base_url() . '' ?>assets/image/logo_aptikom.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="hidden-xs"><span class="font-bold">APTIKOM</span>KALBAR &nbsp;</span>



                    </a>
                </div>


                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>


                    </ul>

                    <ul class="navbar-nav my-lg-0">


                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="user" class="">
                                <span class="hidden-md-down">xxx<i class="fa fa-angle-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="#" data-toggle="modal" data-target="#passwordxx" class="dropdown-item"><i class="fa fa-key"></i> Ganti Password</a>
                                <a href="<?php echo base_url() . 'logout.js' ?>" class="dropdown-item"><i class="fa fa-lg fa-fw fa-sign-out"></i> Keluar</a>
                                <!-- text-->
                            </div>
                        </li>
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"></a></li>

                    </ul>
                </div>
            </nav>
        </header>


        <div class="modal fade" id="passwordxx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1"><i class="fa  fa-info"></i> Ganti Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() . 'pegawai/pegawai/reset_password' ?>" method="post">
                            <div class="form-group">
                                <div class="col-md-12 m-b-20">
                                    <input type="hidden" name="xkode" value="xx" />

                                    <div class="form-group">
                                        <label for="example-email-input" class="col-9 col-form-label">Password Baru :</label>
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="xpassword" id="example-text-input" placeholder="Masukan Password Baru" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email-input" class="col-9 col-form-label">Ulangi Password Baru
                                            :</label>
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="xpassword1" id="example-text-input" placeholder="Masukan Ulang Password Baru" required>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info waves-effect text-left">Update</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Keluar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>