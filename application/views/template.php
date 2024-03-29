<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ADMIN PPOB</title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="<?=base_url()?>assets/favicon.ico" type="image/x-icon"> -->

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url()?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url()?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url()?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url()?>assets/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
            <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="glyphicon glyphicon-search"></i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url()?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('nama_admin');?></div>
                    <div class="email"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="glyphicon glyphicon-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?=base_url('index.php/logout')?>"><i class="glyphicon glyphicon-off" style="padding-right: 10px"></i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <?php
                    $uri=$this->uri->segment(1);
                        if($uri=="dashboard"){
                            $dashboard='class="active"';
                        } elseif($uri=="level"){
                            $level='class="active"';
                        }elseif($uri=="admin"){
                            $admin='class="active"';
                        }elseif($uri=="tarif"){
                            $tarif='class="active"';
                        }elseif($uri=="pelanggan"){
                            $pelanggan='class="active"';
                        }elseif($uri=="penggunaan"){
                            $penggunaan='class="active"';
                        }elseif($uri=="verification"){
                            $verification='class="active"';
                        }
                        elseif($uri=="riwayat"){
                            $riwayat='class="active"';
                        }


                    ?>

                    <li class="header">MAIN NAVIGATION</li>
                    <li <?=@$dashboard?>>
                        <a href="<?=base_url('index.php/dashboard')?>">
                            <i class="glyphicon glyphicon-home" style="padding-top: 8px"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <?php 
                    if($this->session->userdata('id_level')=="1"){
                    ?>
                    <li <?=@$level?>>
                        <a href="<?=base_url('index.php/level')?>">
                            <i class="glyphicon glyphicon-list" style="padding-top: 8px"></i>
                            <span>Level</span>
                        </a>
                    </li>
                    <li <?=@$admin?>>
                        <a href="<?=base_url('index.php/admin')?>">
                            <i class="glyphicon glyphicon-user" style="padding-top: 8px"></i>
                            <span>Data Admin</span>
                        </a>
                    </li>
                    <li <?=@$tarif?>>
                        <a href="<?=base_url('index.php/tarif')?>">
                            <i class="glyphicon glyphicon-usd" style="padding-top: 8px"></i>
                            <span>Data Tarif</span>
                        </a>
                    </li>
                    <li <?=@$pelanggan?>>
                        <a href="<?=base_url('index.php/pelanggan')?>">
                            <i class="glyphicon glyphicon-book" style="padding-top: 8px"></i>
                            <span>Data Pelanggan</span>
                        </a>
                    </li>
                    <li <?=@$penggunaan?>>
                        <a href="<?=base_url('index.php/penggunaan')?>">
                            <i class="glyphicon glyphicon-tags" style="padding-top: 8px"></i>
                            <span>Penggunaan Pelanggan</span>
                        </a>
                    </li>
                    <li <?=@$verification?>>
                        <a href="<?=base_url('index.php/verification')?>">
                            <i class="glyphicon glyphicon-ok-sign" style="padding-top: 8px"></i>
                            <span>Payment Verification</span>
                        </a>
                    </li>
                    <li <?=@$riwayat?>>
                        <a href="<?=base_url('index.php/riwayat')?>">
                            <i class="glyphicon glyphicon-bookmark" style="padding-top: 8px"></i>
                            <span>Riwayat</span>
                        </a>
                    </li>
                    <?php }?>

                    <?php 
                    if($this->session->userdata('id_level')=="2"){
                    ?>
                     <li <?=@$verification?>>
                        <a href="<?=base_url('index.php/verification')?>">
                            <i class="glyphicon glyphicon-ok-sign" style="padding-top: 8px"></i>
                            <span>Payment Verification</span>
                        </a>
                    </li>
                    <li <?=@$riwayat?>>
                        <a href="<?=base_url('index.php/riwayat')?>">
                            <i class="glyphicon glyphicon-bookmark" style="padding-top: 8px"></i>
                            <span>Riwayat</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">Admin - SMK TELKOM MALANG</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <?php 
            $this->load->view($konten);
            ?>

        </div>
    </section>


    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="<?=base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
 -->
    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?=base_url()?>assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?=base_url()?>assets/plugins/flot-charts/jquery.flot.time.js"></script>



      



    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url()?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?=base_url()?>assets/js/admin.js"></script>
    <script src="<?=base_url()?>assets/js/pages/index.js"></script>


    <!-- Custom Js -->


    <!-- Demo Js -->
    <script src="<?=base_url()?>assets/js/demo.js"></script>
</body>

</html>
